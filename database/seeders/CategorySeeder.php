<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User_Access_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $articleTypes = [
            'artistic' => 'Artistic',
            'technic' => 'Technic',
            'science' => 'Science',
            'fashion' => 'Fashion'
        ];

        foreach ($articleTypes as $type => $label) {
            Category::create([
                'type' => $type,
                'label' => $label
            ]);
        }
    }
}
