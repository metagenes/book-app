<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\Eloquent\Model;
use DB;

class BooksSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Book::create([
            'code' => '0408951', 
            'name' => 'The History of Tom Jones, a Foundling',
            'writer' => 'Henry Fielding',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '0408952', 
            'name' => 'Pride and Prejudice',
            'writer' => 'Jane Austen',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '0408953', 
            'name' => 'The Red and the Black',
            'writer' => 'Stendhal',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '0408954', 
            'name' => 'Le Père Goriot',
            'writer' => 'Honoré de Balzac',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '0408955', 
            'name' => 'David Copperfield',
            'writer' => 'Charles Dickens',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '0408956', 
            'name' => 'Madame Bovary',
            'writer' => 'Gustave Flaubert',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '0408957', 
            'name' => 'Mock-Dick',
            'writer' => 'Herman Melville',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '0408958', 
            'name' => 'Wuthering Heights',
            'writer' => 'Emily Brontë',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '0408959', 
            'name' => 'The Brothers Karamazov',
            'writer' => 'Dostoevsky',
            'year'   =>  '1954',
        ]);
        \App\Models\Book::create([
            'code' => '04089510', 
            'name' => 'War and Peace',
            'writer' => 'Tolstoy',
            'year'   =>  '1954',
        ]);
    
    }
}
