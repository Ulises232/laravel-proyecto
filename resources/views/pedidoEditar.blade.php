<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Registro de Pedidos</title>
</head>
<body>
@if(!empty($pedido))

<form method="post" class="col-md-4 offset-md-4"action="{{url('/pedidos/actualizar/'.$pedido->id)}}">
{{csrf_field()}}
<h1>Cambie los datos de un pedido</h1>

  <div class="form-group">
    <label for="pwd">Cliente: </label>
    <input type="text" class="form-control" value="{{$pedido->cliente_id}}"  id="cliente_id" name="cliente_id">
  </div>

  @foreach($clientes as $cliente)
  <div class="form-group">
    <label for="pwd">Nombre: </label>
    <a>{{$cliente->nombre}}</a>
  </div>
  @endforeach

  <div class="form-group">
    <label for="pwd">Libro: </label>
    <input type="text" class="form-control" value="{{$pedido->libro_id}}"  id="libro_id" name="libro_id">
  </div>

  <div class="form-group">
    <label for="pwd">Fecha:</label>
    <input type="date" class="form-control" value="{{$pedido->fecha}}"  id="fecha" name="fecha">
  </div>
  @endif
  <input type="submit" class="btn btn-dark" value="Actualizar Pedidos">
  <a type="button" class="btn btn-outline-dark btn-lg " href="{{url('/pedidos')}}">Volver</a>
</form>
</body>
<br>
<br>
<br>

</html>
