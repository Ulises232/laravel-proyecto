<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libros;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro = new Libros();
        $libro->titulo='Dragones de Eter';
        $libro->editorial_id='1';
        $libro->autor='Raphael Draco';
        $libro->foto='dragones.jpg';
        $libro->save();

        $libro = new Libros();
        $libro->titulo='Night School';
        $libro->editorial_id='2';
        $libro->autor=' CJ Daugherty';
        $libro->foto='night.jpg';
        $libro->save();

        $libro = new Libros();
        $libro->titulo='Mujercitas';
        $libro->editorial_id='3';
        $libro->autor='Louisa May ';
        $libro->foto='mujercitas.jpg';
        $libro->save();

        $libro = new Libros();
        $libro->titulo='Ready Player One';
        $libro->editorial_id='1';
        $libro->autor='Ernest Cline';
        $libro->foto='player.jpg';
        $libro->save();

        $libro = new Libros();
        $libro->titulo='La verdad sobre el caso Harry Quebert';
        $libro->editorial_id='2';
        $libro->autor='Joël Dicker';
        $libro->foto='caso.jpg';
        $libro->save();

        $libro = new Libros();
        $libro->titulo='El principito';
        $libro->editorial_id='3';
        $libro->autor=' Antoine de Saint-Exupéry';
        $libro->foto='principito.jpg';
        $libro->save();

        $libro = new Libros();
        $libro->titulo='Orgullo y prejuicio';
        $libro->editorial_id='2';
        $libro->autor='Jane Austen';
        $libro->foto='orgullo.jpg';
        $libro->save();

        $libro = new Libros();
        $libro->titulo='Divergente';
        $libro->editorial_id='2';
        $libro->autor='Veronica Roth';
        $libro->foto='divergente.jpg';
        $libro->save();

    }
}
