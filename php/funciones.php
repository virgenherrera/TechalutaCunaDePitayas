<?php
//esta funcion sirve para hacer una consulta a la bdds
function consulta_mysql($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include 'php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
	
	//convertir MYSQL query en array
	$valor_regresado = mysql_fetch_array($registro) or die("error al convertir consulta MYSQL en array");
	//valor que regresa esta funcion
	return $valor_regresado;
}//<--fin consulta_mysql()

//esta funcion sirve para hacer una consulta a la bdds
function consulta_bucle($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include 'php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
	
	//valor que regresa esta funcion
	return $registro;
}//<--fin consulta_mysql()
?>