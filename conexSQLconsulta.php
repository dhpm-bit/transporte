<?php

$db_host="localhost";
$db_user="dhpm";
$db_password="Annanacho_01";
$db_name="transportes1";
$db_table_name="tarifas_main";
$db_table_name2="zonaProvincias";

//conexion via MYSQLI
$db_connection = new mysqli("$db_host", "$db_user", "$db_password","$db_name");


//variables datos index
$subs_peso =($_GET['peso']);
$subs_nom_prov=($_GET['nom_prov']);

//conexion consulta SELECT para que no se cargen 2 iguales
if($db_connection->errno){
   die ('hubo error');
}else{

   $resultado =$db_connection->query("SELECT * FROM $db_table_name NATURAL JOIN $db_table_name2 
   WHERE peso ='$subs_peso'AND nom_prov ='$subs_nom_prov'"); 

   if ($resultado->num_rows){
      while ($fila = $resultado->fetch_assoc()){
      echo $fila ['precio']," ", $fila ['peso']," ", $fila ['nom_prov']," ", $fila ['agencia_nom'], '<br>';
      }

   } else{
      echo 'no hay datos en DB';
      header ("Location:fail.html");
    }   
}
$db_connection->close();

