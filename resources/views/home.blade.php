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
    </head>
    <body>
       <div class="container-fluid">
            <div class="row" style="background-color: #1c4c84"> 
                <div class="col-sm-12 col-md-6">
                    <img class="mt-5 ml-5" src="img/Logo-principal.jpg" alt="logo">
                    <h1 class="mt-4 ml-5" style="font-size:4em;color:white;">TU CARRERA <br> UNIVERSITARIA <br></h1>
                    <h1 class="ml-5" style="font-size:4em;color:#f7ca48;">EN ISRAEL</h1>
                    <p class="mt-3 ml-5" style="font-size:1.5em;color:white;">Megamat Aliá es la oortunidad de acceder <br> a <strong>las mejores unirvesidades</strong> del Estado de Israel </p>
                    <button class="mt-3 mb-4 ml-5 btn" style="color:#1c4c84;background-color:#f7ca48;border:none;">CONOCÉ MÁS  </button>
                </div>
                <div class="col-md-6 ">
                    <img src="img/imagen-principal.jpg" alt="img principal">
                </div>
            </div>
            <div class="row mt-3 mb-4">
                <h4 class="mt-3 offset-md-3 col-md-8" style="color: #1c4c84">ENVIANOS TUS DATOS PARA INSCRIBIRTE AL PROGRAMA</h4>
                <form class="mx-auto mt-4 mb-5 text-center">
                    <div class="form-row mb-3 ">
                      <div class="form-group col-md-4 mt-2" >
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Nombre" >
                      </div>
                      <div class="form-group col-md-4 mt-2 ">
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Apellidos">
                      </div>
                      <div class="form-group col-md-4 mt-2  ">
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Fecha de nacimiento">
                      </div>
                    </div>
                    <div class="form-row mb-3 ">
                        <div class="form-group col-md-4 mt-2">
                          <input type="email" class="form-control" id="inputEmail4" placeholder="DNI">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="password" class="form-control" id="inputPassword4" placeholder="E-mail">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Teléfono">
                        </div>
                      </div>
                      <div class="form-row mb-3 ">
                        <div class="form-group col-md-4 mt-2">
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Dirección">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Ciudad">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Provincia">
                        </div>
                      </div>
                      <button type="submit" class="btn" style="background-color:#1c4c84;color:#f7ca48;border:none">ENVIAR</button>
                  </form>
            </div>
            <div class="row mt-3 py-3" style="background-color: #1c4c84">
                    <img class="mx-auto" src="img/logo-pie1.jpg" alt="cargando img" style="height:0.5%">
                    <img class="mx-auto" src="img/logo-pie2.jpg" alt="cargando img" style="height:0.5%">
                    <img class="mx-auto" src="img/logo-pie3.jpg" alt="cargando img" style="height:0.5%">
                    <img class="mx-auto" src="img/logo-pie4.jpg" alt="cargando img" style="height:0.5%">
            </div>
       </div>
    </body>
</html>
