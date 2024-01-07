<?php

namespace Database\Seeders;

use App\Models\UserAccessType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAccessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $articleTypes = [
            'jurnalist' => 'Jurnalist',
            'editor' => 'Editor',
            'cititor' => 'Cititor',
        ];

        foreach ($articleTypes as $type => $label) {
            UserAccessType::create([
                'type' => $type,
                'label' => $label
            ]);
        }
    }
}
