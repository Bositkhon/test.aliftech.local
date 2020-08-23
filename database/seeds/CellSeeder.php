<?php

use App\Box;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boxes = Box::all();

        foreach ($boxes as $box) {
            $cells = [];

            for ($i = 1; $i <= 1; $i++) {
                $cells[] = ['id' => Str::random(5)];
            }

            $box->cells()->createMany($cells);
        }
    }
}
