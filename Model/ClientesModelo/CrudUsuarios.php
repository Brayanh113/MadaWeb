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
