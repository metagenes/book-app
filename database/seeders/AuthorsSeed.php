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
        \App\Models\Author::create([
            'author' => 'Henry Fielding', 
            'book_id' => '1',
        ]);
        \App\Models\Author::create([
            'author' => 'Jane Austen', 
            'book_id' => '2',
   
        ]);
        \App\Models\Author::create([
            'author' => 'Stendhal', 
            'book_id' => '3',
            
        ]);
        \App\Models\Author::create([
            'author' => 'Honoré de Balzac', 
            'book_id' => '4',
           
        ]);
        \App\Models\Author::create([
            'author' => 'Charles Dickens', 
            'book_id' => '5',
            
        ]);
        \App\Models\Author::create([
            'author' => 'Gustave Flaubert', 
            'book_id' => '6',
           
        ]);
        \App\Models\Author::create([
            'author' => 'Herman Melville', 
            'book_id' => '7',
           
        ]);
        \App\Models\Author::create([
            'author' => 'Emily Brontë', 
            'book_id' => '8',
         
        ]);
        \App\Models\Author::create([
            'author' => 'Dostoevsky', 
            'book_id' => '9',
            
        ]);
        \App\Models\Author::create([
            'author' => 'Tolstoy', 
            'book_id' => '10',
            
        ]);
    }
}
