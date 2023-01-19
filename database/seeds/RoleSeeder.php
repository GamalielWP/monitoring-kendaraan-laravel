<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nama_role' => 'Kepala Pool',
        ]);

        DB::table('roles')->insert([
            'nama_role' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'nama_role' => 'Kepala Tambang',
        ]);
    }
}
