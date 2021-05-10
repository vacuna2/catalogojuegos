<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <form method="POST" action="?c=Login&a=Succes">
        <section class="container ">
            <div class="row">
                <div class="col-12 text-success ">
                    <h1 class="text-light text-center  pt-lg-4">Iniciar Sesion</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-success ">
                    <h3 class="text-light text-center px-lg-5 pt-lg-4 pb-lg-3 p-4">Hola :)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-success ">
                    <p class="text-light text-center">Porfavor llene los campos</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center pt-lg-4">

                <div class="col-12 col-sm-6 text-success ">
                    <p class="text-light">Usuario: <input type="text" name="txtId" class="form-control" placeholder="Ingrese su usuario" required /></p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center pt-lg-4">
                <div class="col-12 col-sm-6 text-success">
                    <p class="text-light">Contraseña<input type="password" name="txtPassword" class="form-control" placeholder="Ingrese su contraseña" required /></p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center pt-lg-4">
                <div class="col-lg-4 ">
                    <input type="submit" name="btnIniciarSecion" value="Iniciar Sesion" class="btn btn-outline-light w-100 p-3">
                </div>
            </div>
        </section>
    </form>

</body>

</html>