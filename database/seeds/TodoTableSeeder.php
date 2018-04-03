<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\todo::class, 5)->create(); 
    }
}
