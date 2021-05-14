<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            'name'=>'Test Rara',
            'email'=>'test@gmail.com',
            'contact'=>'+977 9860921715',
            'address'=>'test Adderess',
            'password'=>bcrypt('test@123')
        ];

        DB::table('users')->insert($data);
    }
}
