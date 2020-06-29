<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 2)->create()->each(function($user) {
            // $user->transaction()->save(factory(App\Transaction::class)->make());
        // });

        $faker = \Faker\Factory::create();

        DB::table('users')->insert([
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'user_ref_id' => 002,
            'phone_number' => $faker->e164PhoneNumber,
            'role' => $faker->jobTitle,
        ]);

    }
}
