<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawans')->insert([
            'nip' => '123456789',
            'nama' => 'Muhammad Rezha',
            'jeniskelamin' => 'laki',
            'notelp' => '1234567890',
            'alamat' => 'Yogyakarta',
        ]);
    }
}
