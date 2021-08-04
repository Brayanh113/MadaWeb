<?php
include "../../Model/conexion.php";
include "../../Model/VentasModelo/ventas.php";
include "../../Model/VentasModelo/CrudVentas.Php";



class ControladorVentas{

	public function listarVentas(){

		$CrudVentas = new CrudVentas();

		return $CrudVentas -> listarVentas();
	}

	public function listarVentasEnviadas(){
		$CrudVentas = new CrudVentas();

		return $CrudVentas -> listarVentasEnviadas();
	}

	public function listarDetalleVenta($IdPedido){

		$CrudVentas = new CrudVentas();

		return $CrudVentas -> listarDetalleVenta($IdPedido);

	}
	public function listarProductosVendidos($IdPedido){
		$CrudVentas = new CrudVentas();

		return $CrudVentas -> listarProductosVendidos($IdPedido);

	}

	public function anularProductoVenta($IdDetallePedido,$TotalIva,$SubTotal,$Total,$IdPedido,$TotalStock,$IdDetalleProducto){
		
		$ventas = new Ventas();
		$ventas -> setIdDetallePedido($IdDetallePedido);

		$ventas2 = new Ventas();
		$ventas2 -> setTotalIva($TotalIva);
		$ventas2 -> setSubTotal($SubTotal);
		$ventas2 -> setTotal($Total);
		$ventas2 -> setIdPedido($IdPedido);

		$CrudVentas = new CrudVentas();
		$CrudVentas -> preciosProductoVenta($ventas2);
		$CrudVentas -> anularProductoVenta($ventas);
		$CrudVentas -> aumentarStock($TotalStock,$IdDetalleProducto);

	}
	public function cambiarEstado($IdEstadoPedido, $IdPedido){
		$ventas = new Ventas();

		$ventas -> setIdEstadoPedido($IdEstadoPedido);
		$ventas -> setIdPedido($IdPedido);

		$CrudVentas = new CrudVentas();
		$CrudVentas -> cambiarEstado($ventas);

	}


}

$ControladorVentas = new ControladorVentas();

//Redirigir
if(isset($_POST['factura'])){
	header('Location:../../Vista/VentasVista/factura.php?IdPedido='.$_POST['IdPedido']);
}

if(isset($_POST['verDetalleVenta'])){
	header('Location:../../Vista/VentasVista/detalleVenta.php?IdPedido='.$_POST['IdPedido']);
}
// if(isset($_POST['editarDetalleVenta'])){
// 	header('Location:../Vista/editarDetallePedido.php?IdDetallePedido='.$_POST['IdDetallePedido']);
// }

if(isset($_POST['anularProductoVenta'])){
	$ControladorVentas -> anularProductoVenta($_POST['IdDetallePedido'],$_POST['TotalIva'],$_POST['SubTotal'],$_POST['Total'],$_POST['IdPedido'],$_POST['TotalStock'],$_POST['IdDetalleProducto']);
}

if(isset($_POST['cambiarEstado'])){
	$ControladorVentas-> cambiarEstado($_POST['IdEstadoPedido'],$_POST['IdPedido']);
}

