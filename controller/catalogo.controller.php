<?php

require_once 'model/producto.php';
session_start();

class CatalogoController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Producto();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/catalogo.php';
        require_once 'view/footer.php';
    }
    public function Crud()
    {
        $producto = new Producto();
        require_once 'view/header.php';
        require_once 'view/producto-editar.php';
        require_once 'view/footer.php';
    }
}