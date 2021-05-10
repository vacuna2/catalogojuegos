
    <div class="row">
        <div class="col-12 text-success ">
            <h1 class="text-light text-center text-uppercase pt-lg-4">Catalogo de videojuegos</h1>
        </div>
    </div>

    <div class="row justify-content-center align-items-center pt-lg-4">
        <div class="col-12 col-sm-6 text-success ">
            <form action="#" method = "POST">
                <input type="text" name="txtcategoria" list="exampleList" class="form-control w-100 p-3" placeholder="PC, PS4, PS3, SWICHT.....">
        </div>
                <datalist id="exampleList">
                    <option value="PC">
                    <option value="PS4">
                    <option value="PS3">
                    <option value="SWICHT">
                </datalist>
                <div class="col-12 col-sm-6 text-success ">
                    <input type="submit" name = "btnInverso" value = "Filtrar" class="btn btn-outline-light w-100 p-3">
                </div>
            </form>
    </div>

    <br>

    <table class="table table-sm table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripccion</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($_POST && $_POST["txtcategoria"]!= "") {
                //read
                $filtro = $_POST["txtcategoria"];
                foreach ($this->model->ListarXCategoria($filtro) as $r) : ?>
                    <tr>
                        <td><?php echo $r->Nombre; ?></td>
                        <td><?php echo $r->Descripccion; ?></td>
                        <td>S/.<?php echo $r->Precio; ?></td>
                        <td><?php echo $r->Categoria; ?></td>
                        <td>
                            <img width="100" src="data:image/<?php echo ($r->tipo); ?>;base64,<?php echo base64_encode($r->imagen); ?>">
                        </td>
                    </tr>
            <?php endforeach;
            } else {
                foreach ($this->model->Listar() as $r) : ?>
                    <tr>
                        <td><?php echo $r->Nombre; ?></td>
                        <td><?php echo $r->Descripccion; ?></td>
                        <td>S/.<?php echo $r->Precio; ?></td>
                        <td><?php echo $r->Categoria; ?></td>
                        <td>
                            <img width="100" src="data:image/<?php echo ($r->tipo); ?>;base64,<?php echo base64_encode($r->imagen); ?>">
                        </td>
                    </tr>
            <?php endforeach;
            } ?>

        </tbody>
    </table>