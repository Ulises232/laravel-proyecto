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
    <br>
    <title>Nuevo cliente</title>

</head>
<body>

<h1 class="text-center">REGISTRE SUS DATOS</h1>
<br>
<form method="post" class="col-md-4 offset-md-4 bg-dark" action="{{url('/clientes/almacenar')}}">
{{csrf_field()}}
<br>

    <div class="form-group ">
      <label for="pwd" class="text-light">Nombre:</label>
      <input type="text" class="form-control" placeholder="Captura nombre" id="nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="pwd" class="text-light" >Dirección</label>
      <input type="text" class="form-control" placeholder="Captura tu direccion" id="direccion" name="direccion">
    </div>
    <div class="form-group">
      <label for="pwd" class="text-light">Saldo</label>
      <input type="text" class="form-control" placeholder="Captura tu saldo" id="saldo" name="saldo">
  </div>
  <input type="hidden" class="form-control" value="{{Auth::user()->id}}"  name="user_id">

  <input type="submit" class="btn btn-light" value="Registrar Cliente">
  <a type="button" class="btn btn-outline-light  " href="{{url('/home')}}">Volver</a>
</form>
</body>
</html>
