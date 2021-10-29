<?php

namespace App\Http\Controllers;

use App\Models\Editoriales;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class EditorialController extends Controller
{
    public function index(){

        $editoriales=DB::table('editoriales')->get();
        return view ('editoriales',['editoriales' => $editoriales]);
    }
    public function detalle($id){
        $editorial=DB::table('editoriales')->where('id',$id)->first();
        return view ('detalleEditorial', compact('editorial'));
    }
    public function captura(){
        return view('registroEditorial');
    }
    public function almacenar(Request $request){
        $editorial=Editoriales::create($request->all());
        return redirect ('/home');
    }
    public function cambiar($id){
        $editorial= Editoriales::findOrFail($id);
        return view ('editorialEditar', compact('editorial'));
    }
    public function actualizar(Request $request,$id){
        $editorial= Editoriales::findOrFail($id);
        $editorial->nombre=$request->nombre;
        $editorial->direccion=$request->direccion;
        $editorial->contacto=$request->contacto;
        $editorial->telefono=$request->telefono;
        $editorial->save();
        return redirect('editoriales');
    }
    public function eliminar($id){
        DB::table('editoriales')->where('id',$id)->delete();
            return redirect('editoriales');
    }

}
