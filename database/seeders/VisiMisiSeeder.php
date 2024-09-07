<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisiMisi::query()->create([
            'content' => 'Menjadi perguruan tinggi yang unggul dalam bidang teknologi informasi dan komunikasi yang berbasis kearifan lokal dan berwawasan global.'
        ]);
    }
}
