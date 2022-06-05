<?php 
require "Conexion.php";

class Lugares
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function Lugar()
    {
        $sql = "SELECT idsitios,nombre,imagen,tipo,descripcion,descripcion2,precio,telefono,email,disponible,dias,recomendado FROM sitios WHERE tipo='lugares' ORDER BY recomendado;";
        $response = $this->conn->ConsultaCon($sql);
        return $response;
    }

	function LugarEsp($id)
    {
        $sql = "SELECT idsitios,nombre,imagen,tipo,descripcion,descripcion2,precio,telefono,email,disponible,dias,recomendado FROM sitios WHERE tipo='lugares' WHERE idsitios=".$id;
        $response = $this->conn->ConsultaArray($sql);
        return $response;
    }

    function Hotel()
    {
        $sql = "SELECT idsitios,nombre,imagen,tipo,descripcion,descripcion2,precio,telefono,email,disponible,dias,recomendado FROM sitios WHERE tipo='hotel' ORDER BY recomendado;";
        $response = $this->conn->ConsultaCon($sql);
        return $response;
    }

	function HotelEsp($id)
    {
        $sql = "SELECT idsitios,nombre,imagen,tipo,descripcion,descripcion2,precio,telefono,email,disponible,dias,recomendado FROM sitios WHERE tipo='hotel' WHERE idsitios=".$id;
        $response = $this->conn->ConsultaArray($sql);
        return $response;
    }

    function Restobar()
    {
        $sql = "SELECT idsitios,nombre,imagen,tipo,descripcion,descripcion2,precio,telefono,email,disponible,dias,recomendado FROM sitios WHERE tipo='restaurant' ORDER BY recomendado;";
        $response = $this->conn->ConsultaCon($sql);
        return $response;
    }

	function RestobarEsp($id)
    {
        $sql = "SELECT idsitios,nombre,imagen,tipo,descripcion,descripcion2,precio,telefono,email,disponible,dias,recomendado FROM sitios WHERE tipo='restaurant' WHERE idsitios=".$id;
        $response = $this->conn->ConsultaArray($sql);
        return $response;
    }
}


