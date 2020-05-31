<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Txt pestaña</title>
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Monserrat:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/ico" href="img/favicon.ico">   
    </head>
    <body>
       <div class="container-fluid">
            <div class="row" style="background-color: #1c4c84"> 
                <div class=" col-md-6 col-12">
                    <img class="mt-5 ml-5" src="img/Logo-principal.jpg" alt="logo">
                    <h1 class="mt-4 ml-5" style="font-size:4em;color:white;">TU CARRERA <br> UNIVERSITARIA <br></h1>
                    <h1 class="ml-5" style="font-size:4em;color:#f7ca48;">EN ISRAEL</h1>
                    <p class="mt-3 ml-5" style="font-size:1.5em;color:white;">Megamat Aliá es la oortunidad de acceder <br> a <strong>las mejores unirvesidades</strong> del Estado de Israel </p>
                    <button class="mt-3 mb-4 ml-5 btn" style="color:#1c4c84;background-color:#f7ca48;border:none;">CONOCÉ MÁS  </button>
                </div>
                <div class="col-md-6" style="overflow: hidden;">
                    <img style="min-height: 100%;min-width: 100%;" src="img/imagen-principal.jpg" alt="img principal">
                </div>
            </div>
            <div class="row mt-3 mb-4">
                <h4 class="mt-3 offset-md-2 offset-xl-3 col-md-8 ba" style="color: #1c4c84">ENVIANOS TUS DATOS PARA INSCRIBIRTE AL PROGRAMA</h4>
                <form class="mx-auto mt-4 mb-5 text-center" method="POST" action="/envioDatos">
                    @csrf
                    <div class="form-row mb-3 mw-100">
                      <div class="form-group col-md-4 mt-2" >
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus  placeholder="Nombre" >
                      </div>
                      <div class="form-group col-md-4 mt-2 ">
                        <input type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus placeholder="Apellidos">
                      </div>
                      <div class="form-group col-md-4 mt-2  ">
                        <input type="date" class="form-control @error('fechanac') is-invalid @enderror" name="fechanac" value="{{ old('fechanac') }}" required autocomplete="fechanac" autofocus placeholder="Fecha de nacimiento">
                      </div>
                    </div>
                    <div class="form-row mb-3 mw-100">
                        <div class="form-group col-md-4 mt-2">
                          <input type="number" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus placeholder="DNI">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus placeholder="Teléfono">
                        </div>
                      </div>
                      <div class="form-row mb-3 mw-100">
                        <div class="form-group col-md-4 mt-2">
                          <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus placeholder="Dirección">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus placeholder="Ciudad">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="text" class="form-control @error('provincia') is-invalid @enderror" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus placeholder="Provincia">
                        </div>
                      </div>
                      <button type="submit" class="btn ba" style="background-color:#1c4c84;color:#f7ca48;border:none;font-weight: 800;">ENVIAR</button>
                  </form>
            </div>
            <div class="row mt-3 py-3" style="background-color: #1c4c84">
                    <img class="mw-100 mx-auto" src="img/logo-pie1.jpg" alt="cargando img" style="height:0.5%">
                    <img class="mx-auto" src="img/logo-pie2.jpg" alt="cargando img" style="height:0.5%">
                    <img class="mx-auto" src="img/logo-pie3.jpg" alt="cargando img" style="height:0.5%">
                    <img class="mx-auto" src="img/logo-pie4.jpg" alt="cargando img" style="height:0.5%">
            </div>
       </div>
    </body>
</html>
