<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class LibroController extends Controller
{
    public function index(){

        $libros=DB::table('libros')->get();

        return view ('libros',['libros' => $libros]);
    }
    public function detalle($id){
        $libro=DB::table('libros')->where('id',$id)->first();
        return view ('detalleLibro', compact('libro'));
    }
    public function captura(){
        return view('registroLibro');
    }
    public function almacenar(Request $request){
        $libro=Libros::create($request->all());
        return redirect ('home');
    }

    public function cambiar($id){
        $libro= Libros::findOrFail($id);
        return view ('libroEditar', compact('libro'));
    }
    public function actualizar(Request $request,$id){
        $libro= Libros::findOrFail($id);
        $libro->titulo=$request->titulo;
        $libro->autor=$request->autor;
        $libro->editorial_id=$request->editorial_id;
        $libro->save();
        return redirect('libros2');
    }
    public function eliminar($id){
        DB::table('libros')->where('id',$id)->delete();
            return redirect('libros2');
    }

}
