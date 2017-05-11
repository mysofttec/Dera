<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=Role::where('name','admin')->first();
        $producer=Role::where('name','producer')->first();
        $consumer=Role::where('name','consumer')->first();

        $read=Permission::where('name','List-User')->first();
        $create=Permission::where('name','Create-User')->first();
        $update=Permission::where('name','Update-User')->first();
        $delete=Permission::where('name','Delete-User')->first();
        $upload=Permission::where('name','Upload-Product')->first();
        $download=Permission::where('name','Download-Product')->first();

     //$arry= array($read, $create, $update, $delete, $upload, $download);



        $admin->attachPermissions(array($read, $create, $update, $delete, $upload, $download));
        $producer->attachPermissions(array($upload, $download));
        $consumer->attachPermissions(array($download));



    }
}
