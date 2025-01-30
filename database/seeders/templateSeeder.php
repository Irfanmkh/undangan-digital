<?php

namespace Database\Seeders;

use App\Models\template;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class templateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        template::create([
            "nama" => "undangan modern",
            "deskripsi" => "undangan digital yang dibungkus secara modern dan bagus",
            "harga" => "150000",
        ]);
        template::create([
            'nama' => 'undangan digital stylish',
            'deskripsi' => 'undangan digital yang stylish dan menakjubkan',
            'harga' => '200000',
        ]);
    }
}
