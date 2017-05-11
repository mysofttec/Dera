<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()


    {
        $admin= new Role();
        $admin->name= 'admin';
        $admin->display_name='Admin';
        $admin->description='Admin can mange the accounts and mange ACL';
        $admin->save();


        $producer= new Role();
        $producer->name= 'producer';
        $producer->display_name='Seller';
        $producer->description='producer can upload the product and can sell it';
        $producer->save();

        $consumer= new Role();
        $consumer->name= 'consumer';
        $consumer->display_name='buyer';
        $consumer->description='consumer can dowload the product and can sell it';
        $consumer->save();


    }
}
