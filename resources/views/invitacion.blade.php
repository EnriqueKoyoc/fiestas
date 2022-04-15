{{--  @extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">        
        <div class="col-md-8">

            <a class="btn btn-primary" target="blank" href="https://wa.me/529992639004/?text=¡Hola!,%20quiero%20confirmar%20asistencia%20para%20la%20fiesta%20de%20cumpleaños%20de%20Puchi" >CONFIRMAR ASISTENCIA</a>
            
        </div>
    </div
    

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Latitud</label>
                <input type="text" id="latitud" class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="longitud">Longitud</label>
                <input type="text" id="longitud" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="mapa" style="width: 500px; height: 500px;"></div>
        </div>
    </div>
</div>


@endsection  --}}
{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script>
        function iniciarMap(){
            var coord = {lat: 20.987086, lng: -89.729747};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: coord
            });

            var marker = new google.maps.Marker({
                position: coord,
                map: map
            });
        }
    </script>

    <script src="https://maps.googleaplis.com/maps/api/js/?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</head>
<style>
    #map{
        height: 500px;
        width: 100%;
    }
</style>
<body>
    <div id="map">

    </div>
</body>
</html>  --}}

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.9996272336294!2d-89.74782157077104!3d20.8721103522291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56125b4d101f63%3A0xd4fa1e391ee6d0c0!2zQy4gMzMsIFVtw6FuLCA5NzM5MCBVbcOhbiwgWXVjLg!5e0!3m2!1ses-419!2smx!4v1650059886676!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>