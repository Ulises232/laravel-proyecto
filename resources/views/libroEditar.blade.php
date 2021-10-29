<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Registro de libros</title>
        <link href="{{asset('css/product.css')}}" rel="stylesheet">


    <title>Actualizar Datos del libro</title>
</head>
<body>
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2" href="/home" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Home</title><path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg>
          </a>
          <a class="py-2 d-none d-md-inline-block" href="/clientes">Clientes</a>
          <a class="py-2 d-none d-md-inline-block" href="/pedidos">Pedidos</a>
          <a class="py-2 d-none d-md-inline-block" href="/libros2">Libros</a>
          <a class="py-2 d-none d-md-inline-block" href="/editoriales">Editoriales</a>
          <a class="py-2 d-none d-md-inline-block text-light">{{ Auth::user()->name }}</a>
          <a class="py-2 d-none d-md-inline-block" href="/inicio">Cerrar sesión</a>



        </nav>
      </header>
@if(!empty($libro))
<br>
    <form method="post" class="col-md-4 offset-md-4"action="{{url('/libros/actualizar/'.$libro->id)}}">
        {{csrf_field()}}
        <h1>ACTUALIZA LOS DATOS DEL LIBRO</h1>
    <div class="form-group">
        <label for="pwd">Titulo:</label>
        <input type="text" class="form-control" value="{{$libro->titulo}}" id="titulo" name="titulo">
    </div>
    <div class="form-group">
        <label for="pwd">Autor:</label>
        <input type="text" class="form-control" value="{{$libro->autor}}" id="autor" name="autor">
    </div>
    <div class="form-group">
        <label for="pwd">Editorial:</label>
        <input type="text" class="form-control" value="{{$libro->editorial_id}}" id="editorial_id" name="editorial_id">
    </div>
    <div class="form-group">
        <label for="pwd">Cambiar imagen</label>
        <input type="file" class="form-control" value="{{$libro->foto}}" id="foto" name="foto">
    </div>
    <input type="submit" class="btn btn-dark" value="Actualizar Datos del libro"/>
    <a type="button" class="btn btn-outline-dark btn-lg " href="{{url('/libros2')}}">Volver</a>
    </form>
    @endif

</body>
</html>
