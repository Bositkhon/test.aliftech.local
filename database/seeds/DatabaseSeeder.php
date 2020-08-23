<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BoxSeeder::class);
        $this->call(CellSeeder::class);
        $this->call(FolderSeeder::class);
    }
}
