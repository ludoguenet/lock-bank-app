<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)
            ->forEachSequence(
                ['id' => 1, 'name' => 'John', 'balance' => 100],
                ['id' => 2, 'name' => 'Alicia'],
                ['id' => 3, 'name' => 'Phillipe'])
            ->create();
    }
}
