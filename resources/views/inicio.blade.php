@extends('layouts.app')

@section('content')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<div class="jumbotron text-center">
<br>
<br>
<br>

  <h1>GRACIAS POR TU VISITA</h1>
<br>
<br> 
  <p> <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡REGRESA PRONTO!') }}

                </div></p>
</div>
<h1 class="text-center"s><a type="button" class="btn btn-outline-dark btn-lg " href="{{url('/home')}}">Inicio</a></h1>
@endsection

