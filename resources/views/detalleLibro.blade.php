@if (!empty($libro))
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="{{asset('css/product.css')}}" rel="stylesheet">
  <header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="/home" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Home</title><path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg>
    </a>
    <a class=py-2 d-none d-md-inline-block" href="{{url('pedido/libro/'.Auth::user()->id)}}">Realizar pedido</a>
    <a class="py-2 d-none d-md-inline-block" href="/libros">Libros </a>
    <a class="py-2 d-none d-md-inline-block text-light">{{ Auth::user()->name }}</a>
    <a class="py-2 d-none d-md-inline-block" href="/inicio">Cerrar sesión</a>



  </nav>
</header>
</head>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">DETALLES DE LOS LIBROS</h1>
      <p class="lead fw-normal">Ve los detalles del libro y has un pedido.</p>
    </div>
    <img src="https://descubierta.es/wp-content/uploads/2018/06/portada-ilustrada-grimorio13.jpg" class="product-device shadow-sm d-none d-md-block"></img>
    <img src="https://images-na.ssl-images-amazon.com/images/I/71WzzmBVvJL.jpg" class="product-device product-device-2 shadow-sm d-none d-md-block" alt="">
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                    <div class="bg-dark text-center text-white overflow-hidden">
                        <div class="my-3 py-3">
                        <h2 class="display-5 text-danger">LIBRO:</h2>
                        <br>
                        <h4>{{$libro->titulo}}</h4>
                        <br>
                        <h2 class="display-5 text-danger">AUTOR:</h2>
                        <br>
                        <h4>{{$libro->autor}}</h4>
                        </div>
                        <img class="bg-light shadow-sm mx-auto" style="width: 70%; height: 500px; border-radius: 21px 21px 0 0;" src="{{asset('img/'.$libro->foto)}}" alt="">
                    </div>
            </div>
            <div class="col-sm-5 text-white" >
                <form method="post" class="col-md-8 offset-md-8 bg-dark mx-auto text-center" action="{{url('/pedidos/almacen')}}">
                    {{csrf_field()}}
                    <br>

                        <div class="form-group">
                          <label for="pwd">FECHA:</label>
                          <input type="date" class="form-control" placeholder="Captura la fecha" id="fecha" name="fecha">
                      </div>
                      <input type="hidden" class="form-control" value="{{$libro->id}}"  name="libro_id">

                      <input type="hidden" class="form-control" value="{{Auth::user()->id}}"  name="cliente_id">
                      <br>

                      <button  type="submit" class="btn btn-light ">Comprar libro</button>
                      <br>


                    </form>
            </div>

        </div>
    </div>

<br>
<br>
<h1 class="text-center"s><a type="button" class="btn btn-outline-dark btn-lg " href="{{url('/libros')}}">Volver</a></h1>

@endif

