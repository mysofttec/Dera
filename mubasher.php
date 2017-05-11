<?php
/**
 * Created by PhpStorm.
 * User: mubasher Chaudhary
 * Date: 1/6/2017
 * Time: 9:33 PM
 */
$license = generate_license();
// YF6G2-HJQEZ-8JZKY-8C8ZN
echo $license."<br>";

$license = generate_license(123456);
// ZJK82N-8GA5AR-ZSPQVX-2N9C
echo $license."<br>";
$license = generate_license($_SERVER['REMOTE_ADDR']);
echo $license."<br>";
// M9H7FP-996BNB-77Y9KW-ARUP4

echo $license."<br>";
function generate_license($suffix = null) {
    // Default tokens contain no "ambiguous" characters: 1,i,0,o
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
    return $license_string;
}
