<?php
	if ($_GET["opcion"] == 2) {
		$servidor="localhost:3307";
	} else {
		$servidor="localhost";
	}	
	$usuario="root";
	$password="";
	$bd_name=$_GET["bd"];
	mysql_connect("$servidor","$usuario","$password")or die("No es posible establecer la conexion.");
	mysql_select_db("$bd_name")or die("NO fue posible seleccionar la Base de Datos correspondiente");
	$sql_co ="show tables";
	$resul_co = mysql_query($sql_co);
	while($r_resul = mysql_fetch_array($resul_co)) {
		echo "<option value=$r_resul[0]>$r_resul[0]</option>";
	}
 ?>