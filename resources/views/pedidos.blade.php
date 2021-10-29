
@if (!empty($pedidos))

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="{{asset('css/product.css')}}" rel="stylesheet">
</head>
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
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">LISTA DE PEDIDOS</h1>
      <p class="lead fw-normal">Listado de los pedidos que has realizado.</p>
    </div>
    <img src="https://descubierta.es/wp-content/uploads/2018/06/portada-ilustrada-grimorio13.jpg" class="product-device shadow-sm d-none d-md-block"></img>
    <img src="https://images-na.ssl-images-amazon.com/images/I/71WzzmBVvJL.jpg" class="product-device product-device-2 shadow-sm d-none d-md-block" alt="">
  </div>
<div class="container-fluid">
    <div class="row col-12">
        @foreach($pedidos as $pedido)
        <div class="col-sm-4">
            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                    <div class="my-3 py-3">
                    <h2 class="text-danger">Fecha:</h2>
                    <h2 class="display-5">{{$pedido->fecha}}</h2>
                    <td> <a type="button" class="btn btn-light" href="{{url('pedido/eliminar/'.$pedido->id)}}">Eliminar</a></td>
                    </div>
                </div>
            </div>
        </div>



    @endforeach
    </div>
</div>
<h1 class="text-center"s><a type="button" class="btn btn-outline-dark btn-lg " href="{{url('/home')}}">Volver</a></h1>
@endif
