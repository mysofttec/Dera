<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                   $names= array("user1", "user2", "user3");

            foreach($names as $name)
            {
                $user= new User();
                //$user= new User();
                $user->name=$name;  //assign the name to user from array
                $user->email=$name."@gmail.com"; //it wwill make email address likme user1@gmail.com
                $user->password=bcrypt('123456789'); // it will brcypt the password
                $user->save();


        }



    }
}
