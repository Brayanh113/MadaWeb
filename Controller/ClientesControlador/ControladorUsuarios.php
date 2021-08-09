<?php
include "../../Model/conexion.php";
include "../../Model/ClientesModelo/CrudUsuarios.php";
include "../../Model/ClientesModelo/usuarios.php";

class ControladorUsuarios{

	public function __construct(){}

	public function listarCliente(){
		$crudCliente = new CrudUsuarios();

		return $crudCliente -> listarCliente(); 
	}

	public function estadoPedido($IdUsuario){
		$crudCliente = new CrudUsuarios();
		$salida =$crudCliente -> estadoPedido($IdUsuario); 
		return $salida;

	}
	
	public function registrarUsuario($Nombre,$Apellido,$Documento,$Direccion,$Telefono,$Correo,$Contrasena,$Estado,$IdRol){

		$usuarios = new Usuarios();
		$usuarios -> setNombre($Nombre);
		$usuarios -> setApellido($Apellido);
		$usuarios -> setDocumento($Documento);
		$usuarios -> setDireccion($Direccion);
		$usuarios -> setTelefono($Telefono);
		$usuarios -> setCorreo($Correo);
		$usuarios -> setContrasena($Contrasena);
		$usuarios -> setEstado($Estado);
		$usuarios -> setIdRol($IdRol);

		$CrudUsuarios = new CrudUsuarios();
		$CrudUsuarios -> registrarUsuario($usuarios);

		header('Location:../../Vista/ClientesVista/admiClientes.php');
	}

	public function buscarUsuario($IdUsuario){
    	$CrudUsuarios = new CrudUsuarios();
    	return $CrudUsuarios -> buscarUsuario($IdUsuario);

    }

    public function actualizarUsuario($IdUsuario,$Estado){

    	$usuarios = new Usuarios();
    	$usuarios -> setIdUsuario($IdUsuario);
		$usuarios -> setEstado($Estado);
		
		$CrudUsuarios = new CrudUsuarios();
	    $CrudUsuarios -> actualizarUsuario($usuarios);

	     
	    // header('Location:../../Vista/ClientesVista/admiClientes.php');
		
    }


}

$ControladorUsuarios = new ControladorUsuarios();

// Registrar, Modificar, Actualizar, Eliminar

if(isset($_POST['registrarUsuario'])){
	$ControladorUsuarios -> registrarUsuario($_POST['Nombre'],$_POST['Apellido'],$_POST['Documento'],$_POST['Direccion'],$_POST['Telefono'],$_POST['Correo'],$_POST['Contrasena'],$_POST['Estado'],$_POST['IdRol']);
}

if(isset($_POST['actualizarUsuario'])){
	$ControladorUsuarios -> actualizarUsuario($_POST['IdUsuario'],$_POST['Estado']);
}

if(isset($_POST['estadoPedido'])){
	$ControladorUsuarios -> estadoPedido($_POST['IdUsuario']);

}

?>

