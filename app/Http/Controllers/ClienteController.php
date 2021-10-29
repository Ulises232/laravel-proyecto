<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ClienteController extends Controller
{
    public function index(){

        $clientes=DB::table('clientes')->get();
        return view ('clientes',['clientes' => $clientes]);
    }
    public function detalle($id){
        $cliente=DB::table('clientes')->where('id',$id)->first();
        return view ('detalleCliente', compact('cliente'));
    }
    public function captura(){
        return view('resgistroCliente');
    }
    public function almacenar(Request $request){
        $cliente=Cliente::create($request->all());
        return redirect ('/home');
    }
    public function cambiar($id){
        $cliente= Cliente::findOrFail($id);
        return view ('clienteEditar', compact('cliente'));
    }
    public function actualizar(Request $request,$id){
        $cliente= Cliente::findOrFail($id);
        $cliente->nombre=$request->nombre;
        $cliente->direccion=$request->direccion;
        $cliente->saldo=$request->saldo;
        $cliente->save();
        return redirect('clientes');
    }
    public function eliminar($id){
        DB::table('clientes')->where('id',$id)->delete();
            return redirect('/clientes');
    }

}
