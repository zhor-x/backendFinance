<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $transactions = [
                ['category_id' => 1, 'amount' => 45000, 'description' => 'Տեսական դասընթաց - Անուն Ազգանուն', 'date' => '2025-01-15', 'type' => 'income'],
                ['category_id' => 2, 'amount' => 35000, 'description' => 'Օնլայն տեսություն - Անուն Ազգանուն', 'date' => '2025-01-14', 'type' => 'income'],
                ['category_id' => 3, 'amount' => 120000, 'description' => 'Վարման դասեր - Անուն Ազգանուն', 'date' => '2025-01-13', 'type' => 'income'],
                ['category_id' => 1, 'amount' => 45000, 'description' => 'Տեսական դասընթաց - Անուն Ազգանուն', 'date' => '2025-01-11', 'type' => 'income'],
                ['category_id' => 3, 'amount' => 120000, 'description' => 'Վարման դասեր - Անուն Ազգանուն', 'date' => '2025-01-10', 'type' => 'income'],
                ['category_id' => 5, 'amount' => 25000, 'description' => 'Լրացուցիչ ծառայություններ', 'date' => '2025-01-09', 'type' => 'income'],
                ['category_id' => 2, 'amount' => 35000, 'description' => 'Օնլայն տեսություն - Անուն Ազգանուն', 'date' => '2025-01-08', 'type' => 'income'],

                ['category_id' => 6, 'amount' => 300000, 'description' => 'Սրահի վարձակալություն', 'date' => '2025-01-05', 'type' => 'expense'],
                ['category_id' => 7, 'amount' => 850000, 'description' => 'Աշխատավարձեր - Հունվար', 'date' => '2025-01-05', 'type' => 'expense'],
                ['category_id' => 8, 'amount' => 125000, 'description' => 'Վառելիք - Հունվար', 'date' => '2025-01-06', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],

                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => fake()->date, 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],
                ['category_id' => 9, 'amount' => 75000, 'description' => 'Մեքենաների սպասարկում', 'date' => '2025-01-07', 'type' => 'expense'],
                ['category_id' => 10, 'amount' => 45000, 'description' => 'Կոմունալ վճարներ', 'date' => '2025-01-08', 'type' => 'expense'],
                ['category_id' => 11, 'amount' => 50000, 'description' => 'Սոցիալական ցանցերում գովազդ', 'date' => '2025-01-09', 'type' => 'expense'],
                ['category_id' => 12, 'amount' => 180000, 'description' => 'Մեքենաների ապահովագրություն', 'date' => '2025-01-10', 'type' => 'expense'],
                ['category_id' => 13, 'amount' => 30000, 'description' => 'Գրասենյակային պիտույքներ', 'date' => '2025-01-11', 'type' => 'expense'],

            ];

            foreach ($transactions as $t) {
                Transaction::create($t);
            }
    }
}
