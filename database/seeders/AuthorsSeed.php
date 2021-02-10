<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\Eloquent\Model;
use DB;


class AuthorsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Eloquent::unguard();

        $path = 'database/authors.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('table authors seeded!');
    }
}
