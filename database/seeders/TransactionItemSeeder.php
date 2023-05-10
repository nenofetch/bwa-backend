<?php

namespace Database\Seeders;

use App\Models\TransactionItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionItem::factory(5)->create([
            'users_id' => rand(1,4),
            'products_id' => rand(1,4),
            'transactions_id' => rand(1,4),
        ]);
    }
}
