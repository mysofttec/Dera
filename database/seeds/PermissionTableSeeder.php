<?php

use Illuminate\Database\Seeder;

use App\Permission;
class PermissionTableSeeder extends Seeder
{


    public function run()
    {
       $list_user=new Permission();
        $list_user->name='List-User';
        $list_user->display_name='List of Users';
        $list_user->description='Can list all the users';
        $list_user->save();

        $create_user= new Permission();
        $create_user->name='Create-User';
        $create_user->display_name='Create User';
        $create_user->description='Can create users';
        $create_user->save();



        $delete_user= new Permission();
        $delete_user->name='Delete-User';
        $delete_user->display_name='Delete User';
        $delete_user->description='Can delete the users';
        $delete_user->save();

       $delete_user= new Permission();
       $delete_user->name='Update-User';
       $delete_user->display_name='Update User';
       $delete_user->description='Can delete the users';
       $delete_user->save();



        $upload_product= new Permission();
        $upload_product->name='Upload-Product';
        $upload_product->display_name='Upload Product';
        $upload_product->description='Can upload the product';
        $upload_product->save();


        $dowload_product= new Permission();
        $dowload_product->name='Download-Product';
        $dowload_product->display_name='Download-Product';
        $dowload_product->description='Can dowload the users';
        $dowload_product->save();


    }
}
