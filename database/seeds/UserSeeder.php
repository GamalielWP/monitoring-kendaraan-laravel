<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Kepala-Pool',
            'password' => Hash::make('1234'),
            'id_role' => '1'
        ]);

        DB::table('users')->insert([
            'username' => 'Admin',
            'password' => Hash::make('1234'),
            'id_role' => '2'
        ]);

        for ($i=1; $i <=6; $i++) { 
            DB::table('users')->insert([
                'username' => 'Kepala-Tambang-'.$i,
                'password' => Hash::make('1234'),
                'id_role' => '3'
            ]);
        }
    }
}
