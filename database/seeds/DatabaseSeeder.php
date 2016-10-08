<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        $this->call('UserTableSeeder');
        Model::reguard();
    }
}


class UserTableSeeder extends Seeder
{
    
    public function run(){
        DB::table('users')->delete();

        App\User::create([
            'name' => 'Admin',
            'email' => 'ksjpaint@gmail.com',
            'password' => bcrypt('admin')
            ]);

        DB::table('logo')->delete();

        App\Logo::create([
        	'url' => 'logo/logo.png'
        	]);

        DB::table('slider')->delete();

        App\Slider::create([
            'order' => '1',
            'ulr' => 'assetweb/images/slider1.jpg'
            ]);

        App\Slider::create([
            'order' => '2',
            'ulr' => 'assetweb/images/slider2.jpg'
            ]);

        App\Slider::create([
            'order' => '3',
            'ulr' => 'assetweb/images/slider3.jpg'
            ]);
    }
}

