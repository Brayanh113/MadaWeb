<?php

class CrudUsuarios{
	public function _construct(){}

	public function listarCliente(){
		$Db = Db::Conectar();

		$sql = $Db -> query('SELECT * FROM usuarios WHERE IdRol = 1');
		$sql -> execute();
		Db::CerrarConexion($Db);
		return $sql -> fetchAll();
	}

	public function estadoPedido($IdUsuario){
		$Db = Db::Conectar();
		$sql = $Db -> prepare("SELECT `pedidos`.`IdPedido`, `pedidos`.`IdEstadoPedido`\n"

    . "FROM `pedidos`  WHERE `pedidos`.`IdEstadoPedido` <=2 AND `pedidos`.`IdUsuario` = $IdUsuario");
		$sql -> execute();
	    Db::CerrarConexion($Db);
	    // $sql -> store_result();
	    $row_cnt = $sql->num_rows;//rowCount();
	    return $row_cnt;


	}


	// public function registrarUsuario($usuarios){
	// 	$mensaje="";
	// 	$Db = Db::Conectar();

	// 	$sql = $Db -> prepare('INSERT INTO usuarios(Nombre,Apellido,Documento,Direccion,Telefono,Correo,Contrasena,Estado,IdRol)VALUES (:Nombre,:Apellido,:Documento,:Direccion,:Telefono,:Correo,:Contrasena,:Estado,:IdRol)');

	// 	$sql->bindvalue('Nombre',$usuarios->getNombre());
	// 	$sql->bindvalue('Apellido',$usuarios->getApellido());
	// 	$sql->bindvalue('Documento',$usuarios->getDocumento());
	// 	$sql->bindvalue('Direccion',$usuarios->getDireccion());
	// 	$sql->bindvalue('Telefono',$usuarios->getTelefono());
	// 	$sql->bindvalue('Correo',$usuarios->getCorreo());
	// 	$sql->bindvalue('Contrasena',$usuarios->getContrasena());
	// 	$sql->bindvalue('Estado',$usuarios->getEstado());
	// 	$sql->bindvalue('IdRol',$usuarios->getIdRol());

	// 	try{
	// 		$sql -> execute();
	// 		$mensaje = "Registro cool";
	// 	}catch(exeption $e){
	// 		$mensaje = $e->getMessage();
	// 	}
	// 	Db::CerrarConexion($Db);
	// 	return $mensaje;
	// }


	public function buscarUsuario($IdUsuario){
		$Db = Db::Conectar();
		$sql = $Db -> query("SELECT * FROM usuarios WHERE IdUsuario = $IdUsuario");
		$sql -> execute();
	    Db::CerrarConexion($Db);
	    return $sql -> fetch(); //Retorna un registro
	}


	public function actualizarUsuario($usuarios){
		$mensaje="";
	    $Db = Db::Conectar();

	    $sql = $Db ->prepare('UPDATE usuarios SET
	    	Estado=:Estado
	    	WHERE IdUsuario = :IdUsuario');
	    $sql->bindvalue('Estado',$usuarios->getEstado());
	    $sql->bindvalue('IdUsuario',$usuarios->getIdUsuario());


	    try{
	    	$sql->execute();
	    	$mensaje= "Modificación cool";
	    }catch(exeption $e){
	    	$mensaje = $e->getMessage();
	    }
	    Db::CerrarConexion($Db);
	    return $mensaje;
	}





}

?>
