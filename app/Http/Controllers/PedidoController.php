<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Controllers\LibroController;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class PedidoController extends Controller
{
    public function index(){

        $pedidos=DB::table('pedidos')->get();

        return view ('pedidos',['pedidos' => $pedidos]);
    }
    public function detalle($id){
        $pedido=DB::table('pedidos')->where('id',$id)->first();
        return view ('detallePedido', compact('pedido'));
    }
    public function misLibros($id){
        $pedidos=DB::table('pedidos')->where('cliente_id',$id)->get();
        return view ('ListaPedidos',['pedidos' => $pedidos]);
    }
    public function captura(){
        return view('resgistroPedido');
    }
    public function almacenar(Request $request){
        $pedido=Pedido::create($request->all());
        return redirect ('pedidos');
    }
    public function almacen(Request $request){
        $pedido=Pedido::create($request->all());
        return redirect ()->action([LibroController::class,'index']);
    }
    public function cambiar($id){
        $pedido= Pedido::findOrFail($id);
        return view ('pedidoEditar', compact('pedido'));
    }
    public function actualizar(Request $request,$id){
        $pedido= Pedido::findOrFail($id);
        $pedido->cliente_id=$request->libro_id;
        $pedido->libro_id=$request->libro_id;
        $pedido->fecha=$request->fecha;
        $pedido->save();
        return redirect('pedidos');
    }
    public function eliminar($id){
        DB::table('pedidos')->where('id',$id)->delete();
        return redirect ('/home');

    }


}
