<?php
include 'calc_peso.php';

$db_host="localhost";
$db_user="dhpm";
$db_password="Annanacho_01";
$db_name="transportes1";
$db_table_name="tarifas_main";
$db_table_name2="zonaProvincias";

//conexion via MYSQLI
$db_connection = new mysqli("$db_host", "$db_user", "$db_password","$db_name");


//variables datos index
$subs_peso1 =($_GET['peso']);
$subs_peso = peso ($subs_peso1); // lo paso por la calculadora peso
$subs_cod_prov=($_GET['cod_prov']); 

//conexion consulta SELECT para que no se cargen 2 iguales
if($db_connection->errno){
   die ('hubo error');
}else{

   echo '<a href= bultos.html>volver al formulario </a><br><br><br>';
   
   $resultado =$db_connection->query("SELECT * FROM $db_table_name NATURAL JOIN $db_table_name2 
   WHERE peso ='$subs_peso'AND cod_prov_id ='$subs_cod_prov'"); 

   if ($resultado->num_rows){
      while ($fila = $resultado->fetch_assoc()){
      echo '<h1>',$fila ['precio']," - ", $fila ['peso'],"- ", $fila ['nom_prov'],"- ",$fila ['agencia_nom'],'</h1><br>';
      }

   } else{
      echo 'no hay datos en DB';
      header ("Location:fail.html");
    }   
}
$db_connection->close();



