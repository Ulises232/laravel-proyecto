<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Libros</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">



    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>



    <!-- Custom styles for this template -->
    <link href="{{asset('css/product.css')}}" rel="stylesheet">
  </head>
  <body>

<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="/" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Home</title><path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="{{url('pedido/libro/'.Auth::user()->id)}}">Lista pedidos</a>
    <a class="py-2 d-none d-md-inline-block" href="/libros">Libros </a>
    <a class="py-2 d-none d-md-inline-block text-light">{{ Auth::user()->name }}</a>
    <a class="py-2 d-none d-md-inline-block" href="/inicio">Cerrar sesión</a>



  </nav>
</header>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">BIENVENIDO</h1>
      <p class="lead fw-normal">Pagina donde podras consultar la lista de libros disponibles y realizar pedidos. Registrate como cliente para poder realizar pedidos.</p>
      <a class="btn btn-outline-secondary" href="/clientes/captura">Registrate como Cliente</a>
    </div>
    <img src="https://descubierta.es/wp-content/uploads/2018/06/portada-ilustrada-grimorio13.jpg" class="product-device shadow-sm d-none d-md-block"></img>
    <img src="https://images-na.ssl-images-amazon.com/images/I/71WzzmBVvJL.jpg" class="product-device product-device-2 shadow-sm d-none d-md-block" alt="">
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">{{$libro->titulo}}</h2>
        <p class="lead">¿Una historia realmente termina cuando cerramos el libro? ¿Alguna vez te has preguntado de dónde vienen los cuentos o a dónde se van? Porque las historias no siempre son como nos las contaron.</p>
        <a type="button" class="btn btn-dark" href="{{url('libro/'.$libro->id)}}">Detalles</a>
      </div>
      <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="{{asset('img/dragones.jpg')}}" alt="">
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Realizar Pedidos</h2>
        <p class="lead">Realiza pedidos de tus libros favoritos.</p>
        <a class="btn btn-outline-secondary" href="/pedidos/captura">Realizar pedido</a>
      </div>
      <img src="https://creatuaplicacion.com/wp-content/uploads/2019/02/ver-pedidos.png" class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" alt="">
    </div>
  </div>





</main>

<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
    </div>
    <div class="col-6 col-md">
      <h5>Liliana</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="https://www.instagram.com/lilianairais_/">Instagram</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Carlos</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="https://www.instagram.com/lalo_acker/">Instagram</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Leonardo</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="https://www.instagram.com/leo_aranda02/">Instagram</a></li>

      </ul>
    </div>
  </div>
</footer>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
