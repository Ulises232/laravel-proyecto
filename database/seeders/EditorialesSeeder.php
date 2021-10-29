<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Editoriales;

class EditorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editorial=new Editoriales();
        $editorial->nombre='Planeta';
        $editorial->contacto='plantemx@hotmail.com';
        $editorial->direccion='León';
        $editorial->telefono='477234';
        $editorial->save();

        $editorial=new Editoriales();
        $editorial->nombre='Penguin Randmo House';
        $editorial->contacto='penguinmx@hotmail.com';
        $editorial->direccion='León';
        $editorial->telefono='458499';
        $editorial->save();

        $editorial=new Editoriales();
        $editorial->nombre='Ebook';
        $editorial->contacto='ebookmx@hotmail.com';
        $editorial->direccion='León';
        $editorial->telefono='477288';
        $editorial->save();
    }
}
