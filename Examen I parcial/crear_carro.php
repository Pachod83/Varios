<?php

include_once 'database.php';
include_once 'carros.php';

$database = new Database();
$db = $database->getConnection();

$item = new Automoviles($db);

if (isset($_POST['txtplaca']) &&
	isset($_POST['txtmodelo']) &&
	isset($_POST['txtid']) &&
	isset($_POST['txtnombre']) &&
	isset($_POST['fecha']) &&
	isset($_POST['txtsexo']) &&
	isset($_POST['txttipo_pro']) &&
	isset($_POST['txtdepartamento']))

{


	$placa = $_POST['txtplaca'];
	$modelo = $_POST['txtmodelo'];
	$id = $_POST['txtid'];
	$nombre = $_POST['txtnombre'];
	$fecha_nac = $_POST['fecha'];
	$sexo = $_POST['txtsexo'];
	$tipo_pro = $_POST['txttipo_pro'];
    $departamento = $_POST['txtdepartamento'];

    $item->placa = $placa;
    $item->modelo= $modelo;
    $item->id= $id;
    $item->nombre= $nombre;
    $item->fecha_nac= $fecha_nac;
    $item->sexo= $sexo;
    $item->tipo_pro= $tipo_pro;
    $item->departamento= $departamento;

    if($item->createEmployee())
    {
    	echo "Vehiculo creado";
    }
    else
    {
    	echo "Vehiculo no creado";
    }

}

?>