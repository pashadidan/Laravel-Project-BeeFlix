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
        $this->call(seedergenre::class);
        $this->call(seedermovie::class);
        $this->call(seederepisode::class);
    }
}
