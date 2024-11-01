<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Livro::create([
                'titulo' => 'Harry Potter e a Pedra Filosofal',
                'autor' => 'J.K Rowling',
                'ano_publicacao' => 1997,
                'resumo' => 'A história fantástica de Harry Potter e seus amigos.',
            ]);
        
            Livro::create([
                'titulo' => 'A revolução dos bichos',
                'autor' =>'George Orwell',
                'ano_publicacao' => 1945,
                'resumo' => 'Uma jornada rumo a uma ditadura.',
            ]);
        
            Livro::create([
                'titulo' => 'Dom Quixote',
                'autor' => 'Miguel de Cervantes',
                'ano_publicacao' => 1605,
                'resumo' => 'As aventuras de um cavaleiro e seu fiel escudeiro.',
            ]);
        
            Livro::create([
                'titulo' => 'Jurassic Park',
                'autor' => 'Michael Crichton',
                'ano_publicacao' =>1990,
                'resumo' => 'O que aconteceria se os dinossauros voltassem a vida?.',
            ]);
        
            Livro::create([
                'titulo' => 'O Pequeno Príncipe',
                'autor' => 'Antoine de Saint-Exupéry',
                'ano_publicacao' => 1943,
                'resumo' => 'Um conto filosófico sobre a vida e a infância.',
            ]);
        }
    }
}
