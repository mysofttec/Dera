<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list_user=new Category();
        $list_user->title='Themes';
        $list_user->description='All types of themes';
        $list_user->save();

        $list_user=new Category();
        $list_user->title='Softwares';
        $list_user->description='All types of Softwares';
        $list_user->save();

        $list_user=new Category();
        $list_user->title='Apps';
        $list_user->description='All types of Apps';
        $list_user->save();

        $list_user=new Category();
        $list_user->title='E-Books';
        $list_user->description='All types of E-Books';
        $list_user->save();

        $list_user=new Category();
        $list_user->title='Audios';
        $list_user->description='All types of Audio recording';
        $list_user->save();

        $list_user=new Category();
        $list_user->title='Videos';
        $list_user->description='All types of Videos';
        $list_user->save();

    }
}