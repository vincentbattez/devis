<?php

use Illuminate\Database\Seeder;

class CguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cgu::class, 2)->create();
    }
}
