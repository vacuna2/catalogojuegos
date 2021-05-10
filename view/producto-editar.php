    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 text-success ">
                <h1 class="text-light text-center  pt-lg-4">Agregar un nuevo Juego</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-success ">
                <p class="text-light text-center">Porfavor llene los campos</p>
            </div>
        </div>

        <div class="row justify-content-center align-items-center pt-lg-4">
            <div class="col-12 col-sm-6 text-success ">
                <p class="text-light">nombre: <input type="text" name="txtnombre" class="form-control" placeholder="Ingrese nombre del juego." required /></p>
            </div>
            <div class="col-12 col-sm-6 text-success ">
                <p class="text-light">Descripccion: <input type="text" name="txtdescripcion" class="form-control" placeholder="Ingrese una descripcion para el juego." required /></p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pt-lg-4">
            <div class="col-12 col-sm-6 text-success ">
                <p class="text-light">Precio: <input type="text" name="txtprecio" class="form-control" placeholder="Ingrese el precio" required /></p>
            </div>
            <div class="col-12 col-sm-6 text-success ">
                <p class="text-light">Categoria: <input type="text" name="txtcategoria" class="form-control" placeholder="Ingrese la categoria a la que pertenece" required /></p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pt-lg-4">
            <div class="col-12 col-sm-6 text-success ">
                <p class="text-light">Stock: <input type="text" name="txtstock" class="form-control" placeholder="Ingrese Stok" required /></p>
            </div>
            <div class="col-12 col-sm-6 text-success ">
            <input type="file" class="form-control-file" name = "foto" >
            </div>
        </div>
        <div class="row justify-content-center align-items-center pt-lg-4">
            <div class="col-12 col-sm-6 text-success ">
                <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-outline-light w-100 p-3">
            </div>
            <div class="col-12 col-sm-6 text-success ">
                <input type="submit" name="btnEliminar" value="Eliminar" class="btn btn-outline-light w-100 p-3">
            </div>
        </div>
    </form>
    <?php
        include("model/producto.php");
        if(isset($_REQUEST['btnAgregar']))
        {
            if(isset($_FILES['foto']['name']))
            {
                $tipo = $_FILES['foto']['type'];
                $nombre = $_FILES['foto']['name'];
                $tamano = $_FILES['foto']['size'];
                $imagenSubida = fopen($_FILES['foto']['tmp_name'],'r');
                $bin = fread($imagenSubida,$tamano);

                $data = new Producto();
                $data->Nombre = $_REQUEST['txtnombre'];
                $data->Descripccion = $_REQUEST['txtdescripcion'];
                $data->Precio = $_REQUEST['txtprecio'];
                $data->Categoria=$_REQUEST['txtcategoria'];
                $data->Stock = $_REQUEST['txtstock'];
                $data->NombreImagen = $nombre;
                $data->Imagen = $bin;
                $data->Tipo = $tipo;
                $data->Registrar($data);
            }
        }

    ?>