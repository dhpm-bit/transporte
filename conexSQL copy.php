<?php

$db_host="localhost";
$db_user="dhpm";
$db_password="Annanacho_01";
$db_name="transportes1";
$db_table_name="tarifas_main";

//conexion via MYSQLI
$db_connection = new mysqli("$db_host", "$db_user", "$db_password","$db_name");


//variables datos index
$subs_precio = ($_POST['precio']);
$subs_peso =($_POST['peso']);
$subs_agencia_id =($_POST['agencia_id']);
//logica $agencia para cargar automatico el nombre
if($subs_agencia_id == 1){
   $agencia = 'DHL';
}
if($subs_agencia_id == 2){
   $agencia = 'SEUR';
}
$subs_agencia_nom = utf8_decode($agencia);
$subs_zona_id = ($_POST['zona_id']);
$subs_zona_nom = utf8_decode('ZONA '.$subs_zona_id);

//mal
// $resultado=mysqli_query("SELECT * FROM '.$db_table_name.' WHERE precio = '".$subs_precio."' AND peso ='".$subs_peso."' AND agencia_id ='".$subs_agencia_id."' AND zona_id='".$subs_zona_id."' ", $db_connection);

//conexion consulta SELECT para que no se cargen 2 iguales
if($db_connection->errno){
   die ('hubo error');
}else{

   $resultado =$db_connection->query("SELECT * FROM $db_table_name WHERE precio = '$subs_precio'AND peso ='$subs_peso'AND agencia_id ='$subs_agencia_id'AND zona_id='$subs_zona_id'"); 

   if ($resultado->num_rows){
      
      header("Location:fail.html");
      
      // while ($fila = $resultado->fetch_assoc()){
   // echo $fila ['precio'], $fila ['peso'], $fila ['agencia_id'], $fila ['zona_id'];
   // }

   } else{ // insertar datos
      echo 'no hay datos en DB';

      $sql= "INSERT INTO $db_table_name (precio, peso, agencia_id, agencia_nom, zona_id, zona_nom) 
      VALUES ('$subs_precio','$subs_peso','$subs_agencia_id','$subs_agencia_nom','$subs_zona_id','$subs_zona_nom')";

         if ($db_connection->query($sql)=== TRUE){
            echo 'creado satisfactorio';
            header("Location: index.html");
            
         }else{
            echo "Error:".$sql.'<br>'.$db_connection->error; 
         }
    }   
}
$db_connection->close();

