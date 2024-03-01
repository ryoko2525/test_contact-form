<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 35) as $index) {
            DB::table('contacts')->insert([
                'category_id' => $faker->numberBetween(1, 5), // カテゴリIDは1から5の範囲でランダムに生成
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'gender' => $faker->numberBetween(1, 3), // 1: 男性, 2: 女性, 3: その他
                'email' => $faker->unique()->safeEmail,
                'tell' => $faker->phoneNumber,
                'address' => $faker->address,
                'building' => $faker->optional()->word, // 50%の確率で NULL にする例
                'detail' => $faker->text,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);
        }
}
}