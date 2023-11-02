<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert(
            [
            'judul' => "Judul Berita Pertama",
            'deskripsi' => "adipisci libero odio impedit porro praesentium molestias?,",
            'gambar' => "konstruksi.png",
            ],
            [
            'judul' => "Judul Berita Kedua",
            'deskripsi' => "adipisci libero odio praesentium molestias?,",
            'gambar' => "jasakeuangan.png",
            ],
            [
            'judul' => "Judul Berita Ketiga",
            'deskripsi' => "odio impedit porro praesentium molestias?,",
            'gambar' => "teknologi.png",
            ],
            
    );
    }
}
