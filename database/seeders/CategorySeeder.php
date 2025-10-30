<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $income = [
            ['id' => 1, 'name' => 'Տեսական', 'type' => 'income', 'icon' => '📚'],
            ['id' => 2, 'name' => 'Տեսական օնլայն', 'type' => 'income', 'icon' => '💻'],
            ['id' => 3, 'name' => 'Գործնական', 'type' => 'income', 'icon' => '🚗'],
            ['id' => 5, 'name' => 'Լրացուցիչ ծառայություններ', 'type' => 'income', 'icon' => '⭐'],
        ];

        $expense = [
            ['id' => 6, 'name' => 'Վարձակալություն', 'type' => 'expense', 'icon' => '🏢'],
            ['id' => 7, 'name' => 'Աշխատավարձ', 'type' => 'expense', 'icon' => '💰'],
            ['id' => 8, 'name' => 'Վառելիք', 'type' => 'expense', 'icon' => '⛽'],
            ['id' => 9, 'name' => 'Մեքենաների սպասարկում', 'type' => 'expense', 'icon' => '🔧'],
            ['id' => 10, 'name' => 'Կոմունալ ծառայություններ', 'type' => 'expense', 'icon' => '💡'],
            ['id' => 11, 'name' => 'Մարքեթինգ', 'type' => 'expense', 'icon' => '📢'],
            ['id' => 12, 'name' => 'Ապահովագրություն', 'type' => 'expense', 'icon' => '🛡️'],
            ['id' => 13, 'name' => 'Այլ ծախսեր', 'type' => 'expense', 'icon' => '📋'],
        ];
        foreach (array_merge($income, $expense) as $cat) {
            Category::firstOrCreate($cat);
        }

    }
}
