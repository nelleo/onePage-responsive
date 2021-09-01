<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ideas En Acción</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Monserrat:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/appp.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    {{-- display:flex;flex-direction:row --}}
    <body class="">
        <div class="container-fluid p-0">
            <div class="col-12 col-md-12" style="background-color: #1c4c84"> 
                <img class="ml-lg-4 mt-1 ml-4 ml-sm-0 col-9 col-sm-5 col-md-7 col-lg-6" src="img/Logo-principal.jpg" alt="logo">
            </div>
            <div class="d-flex justify-content-center">
                <p class="col-md-8" style="color:#1c4c84">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores porro vel eligendi, cumque laboriosam reiciendis, iure tenetur autem ad sed repudiandae quia saepe fuga architecto unde vitae dolor minus modi.
                </p>
            </div>
            <div class="col-12" style="position: absolute;bottom:0;">
                <div class="row py-3 text-center colum flex-wrap " style="background-color: #1c4c84">
                    <img id="logopie" class="mx-auto " src="img/logo-pie1.jpg" alt="cargando img" style="height:0.5%">
                    <img id="logopie" class="mx-auto" src="img/logo-pie2.jpg" alt="cargando img" style="height:0.5%">
                    <img id="logopie" class="mx-auto" src="img/logo-pie3.jpg" alt="cargando img" style="height:0.5%">
                    <img id="logopie" class="mx-auto" src="img/logo-pie4.jpg" alt="cargando img" style="height:0.5%">
                </div>
            </div>
        </div>
    </body>
</html>
