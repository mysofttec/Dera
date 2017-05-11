<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1=User::where('name','user1')->first();
        $user2=User::where('name','user2')->first();
        $user3=User::where('name','user3')->first();

        $admin=Role::where('name','admin')->first();
        $producer=Role::where('name','producer')->first();
        $consumer=Role::where('name','consumer')->first();

        $user1->attachRole($admin);
        $user2->attachRole($producer);
        $user3->attachRole($consumer);








    }
}
