<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'المدير',
            'username' => 'المدير',
            'password' => bcrypt('المدير'),
            'role_id' => 1,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }
}
