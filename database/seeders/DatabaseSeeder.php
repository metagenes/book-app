<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsSeed::class);
        $this->call(BooksSeed::class);
        $this->call(SiteSeeder::class);
    }
}
