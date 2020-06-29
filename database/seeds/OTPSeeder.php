<?php

use Illuminate\Database\Seeder;

class OTPSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OTP::class, 2)->create();
    }
}
