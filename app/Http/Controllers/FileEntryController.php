<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Fileentry;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\License;
use App\User;
use DB;
class FileEntryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $entries = Fileentry::all();

        return view('fileentries.index', compact('entries'));
    }
    function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    public function add(Request $request) {

        $file = $request->file('filefield');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('uploads')->put($file->getFilename().'.'.$extension,  File::get($file));
        $entry = new Fileentry();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $cat_name=$request->input('category');
        $entry->category_id=$cat_name;
        ///licese generation
        $license= new License();
        $suffix = null;
        if(isset($suffix)){
            // Fewer segments if appending suffix
            $num_segments = 3;
            $segment_chars = 6;
        }else{
            $num_segments = 4;
            $segment_chars = 5;
        }
        $tokens = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
        $license_string = '';
        // Build Default License String
        for ($i = 0; $i < $num_segments; $i++) {
            $segment = '';
            for ($j = 0; $j < $segment_chars; $j++) {
                $segment .= $tokens[rand(0, strlen($tokens)-1)];
            }
            $license_string .= $segment;
            if ($i < ($num_segments - 1)) {
                $license_string .= '-';
            }
        }
        // If provided, convert Suffix
        if(isset($suffix)){
            if(is_numeric($suffix)) {   // Userid provided
                $license_string .= '-'.strtoupper(base_convert($suffix,10,36));
            }else{
                $long = sprintf("%u\n", ip2long($suffix),true);
                if($suffix === long2ip($long) ) {
                    $license_string .= '-'.strtoupper(base_convert($long,10,36));
                }else{
                    $license_string .= '-'.strtoupper(str_ireplace(' ','-',$suffix));
                }
            }
        }
        $license->key=$license_string;

        //$license->key;
       // $license->save();

        //ends here
        $entry->Title=$request->input('Title');
        $id = Auth::id();
        $entry->user_id=$id;
        $entry->filename = $file->getFilename().'.'.$extension;
        $entry->price=$request->input('price'); ;
        $entry->save();
        $license->fileentry()->associate($entry);
      //  $entry->save();
        $license->save();
        return redirect('fileentries');

    }
    public function get($filename){

        $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('uploads')->get($entry->filename);

        $i = pathinfo($entry->original_filename);
        $pic_true=0;
        $pic_extension=array("ani", "bmp","cal", "fax", "gif","img","jbg","jpe","jpeg","jpg",
            "mac","pbm","pcd","pcx","pct","pgm","png", "ppm", "psd","ras","tga","tiff");
        for($k=0; $k<22; $k++)
        {
            if(  $i['extension']==$pic_extension[$k])
            {
                $pic_true=1;

            }

        }
        if( $pic_true==0)
        {
            $im = imagecreatetruecolor(150, 150);
            $text_color = imagecolorallocate($im, 233, 14, 91);
            imagestring($im, 2, 5, 5, $entry->original_filename, $text_color);

// Set the content type header - in this case image/jpeg
            header('Content-Type: image/jpeg');

// Output the image
            imagejpeg($im);
            imagedestroy($im);

        }
        return (new Response($file, 300))
          ->header('Content-Type: image/jpeg', $entry->filename);
    }

    public function getDownload($filename){
        //PDF file is stored under project/public/download/info.pdf
        $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
     //   $file = Storage::disk('uploads')->get($entry->filename);
       $pathToFile=public_path().'/uploads/'.$filename;
        return response()->download($pathToFile);
    }
    public function payment($id)
    {
        $entry = Fileentry::find($id);
        $price= $entry->price*100;
    $token= \Illuminate\Support\Facades\Input::get('stripeToken');
    Auth::user()->charge($price);

        return view('fileentries.download', compact('entry'));
    }



}
