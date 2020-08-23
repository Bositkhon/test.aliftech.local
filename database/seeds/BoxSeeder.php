<?php

use App\Box;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Box::firstOrCreate([
                'id' => Str::random(5)
            ]);
        }
    }
}
