<?php

use Illuminate\Database\Seeder;

class GenreSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(\App\Models\Genre::class , 8)->create();
    }
}
