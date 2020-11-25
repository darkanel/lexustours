@extends('layout-exc')

@section('text')<h2 class="display-4"></h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2 class="font-weight-bold">FULL DAY ISLA DE CUBAGUA</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-8 offset-md-2">        
        <p>Durante el Full Day a Cubagua contará con traslado desde su hospedaje hasta el embarcadero, donde será recibido por nuestro grupo de recreadores y activistas, quienes ofrecen diversión y un esmerado servicio a bordo. Se sumergirá en una experiencia diferente haciendo snorkeling a un costado de la isla. Podrá disfrutar de refrescantes bebidas y un suculento almuerzo, tomarse fotos y ser testigo de una exuberante vista durante el Paseo Xerófilo o relajarse en nuestro barro terapia.</p> 
    </div>   

@endsection

@section('con1')
<h2 class="h3 font-weight-bold">El Full Day Incluye</h2> 
<div class="row" style="margin-top: 2rem;">
    <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-left">            
        <li>
            <i class="fas fa-coffee" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Snack de bienvenida</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-utensils"></i>
            <div class="contenedor-eleccion">
                <h4>Almuerzo en la playa</h4>
            </div>
        </li>
         <li>
            <i class="fas fa-beer"></i>
            <div class="contenedor-eleccion">
                <h4>Bar abierto con bebidas Nacionales</h4>
            </div>
        </li>
        <li>
            <i class="far fa-sun" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Sillas y toldos en la playa</h4>
            </div>
        </li>
    </ul>    

    <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-right">
        <li>
            <i class="fas fa-bus" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Traslados hotel / muelle / hotel</h4>
            </div>
        </li>        
        <li>
            <i class="fas fa-ship" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Música, excelente animación y diversión</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Actividades Recreativos</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>El mejor snorkeling en ferry hundido</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Barro terapia</h4>
            </div>
        </li>
    </ul>
</div>
<h3 class="h3 font-weight-bold p-y-2">Recomendaciones y Condiciones:</h3>
<div class="condicion">
    <ul class="col-xs-12 col-lg-8 offset-lg-2">
        <li>
            <i class="far fa-check-square" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4 style="margin-left: 1rem;">Vestido de baño, toallas, protector solar, sandalias o zapatos playeros.</h4>
            </div>
        </li>        
        <li>
            <i class="far fa-check-square" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4 style="margin-left: 1rem;">Niños: O a 3 años = Gratis / 4 a 11 años = 50 % descuento.</h4>
            </div>
        </li>        
    </ul>        
</div>
@endsection
@section('indicador')    
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol> 
@endsection 
@section('con2')    
    
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/cubagua/cubagua01.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/cubagua/cubagua02.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/cubagua/cubagua03.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/cubagua/cubagua04.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/cubagua/cubagua05.jpg') }}">
    </div>

     <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/cubagua/cubagua06.jpg') }}">
    </div>                        
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'FULL DAY ISLA DE CUBAGUA') !!} @endsection