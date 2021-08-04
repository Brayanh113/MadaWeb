<?php

class Usuarios{

	private $IdUsuario; 
	private $Nombre; 
	private $Apellido; 
	private $Documento; 
	private $Direccion; 
	private $Telefono; 
	private $Correo;
	private $Contrasena; 
	private $Estado; 
	private $IdRol;
	 
	public function __construct(){}

	//SETTES
	public function setIdUsuario($IdUsuario){
		$this -> IdUsuario = $IdUsuario;
	}
	public function setNombre($Nombre){
		$this -> Nombre = $Nombre;
	}
	public function setApellido($Apellido){
		$this -> Apellido = $Apellido;
	}
	public function setDocumento($Documento){
		$this -> Documento = $Documento;
	}
	public function setDireccion($Direccion){
		$this -> Direccion = $Direccion;
	}
	public function setTelefono($Telefono){
		$this -> Telefono = $Telefono;
	}
	public function setCorreo($Correo){
		$this -> Correo = $Correo;
	}
	public function setContrasena($Contrasena){
		$this -> Contrasena = $Contrasena;
	}
	public function setEstado($Estado){
		$this -> Estado = $Estado;
	}
	public function setIdRol($IdRol){
		$this -> IdRol = $IdRol;
	}



	//GETTES
	public function getIdUsuario(){
		return $this -> IdUsuario;
	}
	public function getNombre(){
		return $this -> Nombre;
	}
	public function getApellido(){
		return $this -> Apellido;
	}
	public function getDocumento(){
		return $this -> Documento;
	}
	public function getDireccion(){
		return $this -> Direccion;
	}
	public function getTelefono(){
		return $this -> Telefono;
	}
	public function getCorreo(){
		return $this -> Correo;
	}
	public function getContrasena(){
		return $this -> Contrasena;
	}
	public function getEstado(){
		return $this -> Estado;
	}
	public function getIdRol(){
		return $this -> IdRol;
	}

}

?>