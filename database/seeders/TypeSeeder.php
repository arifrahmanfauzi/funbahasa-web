<?php

namespace Database\Seeders;

use App\Models\PostType;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostType::create([
            'name'=> 'KPPN'
        ]);
        PostType::create([
            'name'=> 'FPPN'
        ]);
        PostType::create([
            'name'=> 'Karya Umum'
        ]);
    }
}
