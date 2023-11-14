<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'Keuangan',
            'Konstruksi',
            'Teknologi'
        ];
        foreach($category as $item){
            DB::table('category')->insert(
                [
                    'name' => $item,
                ]
            );
        }

    }
}
