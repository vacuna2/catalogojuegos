<?php
class Producto
{
	private $pdo;
    
    public $id;
    public $Nombre;
    public $Descripccion;
    public $Precio;
    public $Categoria;
    public $Stock;
    public $NombreImagen;
    public $Imagen;
    public $Tipo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	//Nombre,Descripccion,Precio,Categoria,Stock,imagen,tipo
	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tproducto");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
    public function ListarXCategoria($Categoria)
    {
        try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT Nombre,Descripccion,Precio,Categoria,Stock,imagen,tipo FROM tproducto where Categoria = ?");
			$stm->execute(array($Categoria));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }
	public function Registrar(Producto $data)
	{
		try 
		{
		$sql = "INSERT INTO tproducto VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre,
                    $data->Descripccion, 
                    $data->Precio, 
                    $data->Categoria,
                    $data->Stock,
					$data->NombreImagen,
					$data->Imagen,
					$data->Tipo
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
/*
	public function Obtener($id,$password)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tusuario WHERE id = ? AND password = ?");
			          

			$stm->execute(array($id,$password));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
    public function Verificar($id,$password)
    {
        try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tusuario WHERE id = ? AND password = ?");
			$stm->execute(array($id,$password));
			return true;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }

	public function Eliminar($id,$password)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tsuario WHERE id = ? AND password = ?");			          

			$stm->execute(array($id,$password));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE talumno SET 
						Nombre          = ?, 
						Apellido        = ?,
                        Correo        = ?,
						Sexo            = ?, 
						FechaNacimiento = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre, 
                        $data->Correo,
                        $data->Apellido,
                        $data->Sexo,
                        $data->FechaNacimiento,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Alumno $data)
	{
		try 
		{
		$sql = "INSERT INTO talumno(Nombre,Correo,Apellido,Sexo,FechaNacimiento,FechaRegistro) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre,
                    $data->Correo, 
                    $data->Apellido, 
                    $data->Sexo,
                    $data->FechaNacimiento,
                    date('Y-m-d')
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}*/
}