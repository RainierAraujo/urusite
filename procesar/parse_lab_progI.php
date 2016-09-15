<?php 
	include "conex_notas.php";

	if(mysqli_connect_errno())
	{
		echo "error de conexion";
	}

	else {

	$result = mysqli_query($con,"SELECT `CEDULA`,`DEFINITIVA` FROM `ProgramacionIL` WHERE `PERIODO` = '2015B'");
	while($row = mysqli_fetch_array($result)){
			$actualizacion =  mysqli_query($con,"UPDATE `ProgramacionIT` SET `DEFL`=".$row["DEFINITIVA"]." WHERE `CEDULA`=".$row["CEDULA"]." and `PERIODO` = '2015B'");
			//echo "<br>UPDATE `ProgramacionIT` SET `DEFL`=".$row["DEFINITIVA"]." WHERE `CEDULA`=".$row["CEDULA"];
		}	
		
	$result2 = mysqli_query($con,"SELECT `DEFT`,`DEFL`,`CEDULA` FROM `ProgramacionIT` where `PERIODO` = '2015B'");
	while($row2 = mysqli_fetch_array($result2)){	
		if($row2["DEFL"]<10){
			$definitiva = mysqli_query($con,"UPDATE `ProgramacionIT` SET `DEFINITIVA`= 'APL' WHERE `CEDULA`=".$row2["CEDULA"]." and `PERIODO` = '2015B'");
			$reg = "UPDATE `ProgramacionIT` SET `DEFINITIVA`= 'APL' WHERE `CEDULA`=".$row2["CEDULA"]." and `PERIODO` = '2015B'";
		}
		else if($row2["DEFT"]<10){
			$definitiva = mysqli_query($con,"UPDATE `ProgramacionIT` SET `DEFINITIVA`= ".$row2["DEFT"]." WHERE `CEDULA`=".$row2["CEDULA"]." and `PERIODO` = '2015B'");
			$reg = "UPDATE `ProgramacionIT` SET `DEFINITIVA`= ".$row2["DEFT"]." WHERE `CEDULA`=".$row2["CEDULA"]." and `PERIODO` = '2015B'";
		}
		else{
			$def = ceil(($row2["DEFL"]+$row2["DEFT"])/2);
			$definitiva = mysqli_query($con,"UPDATE `ProgramacionIT` SET `DEFINITIVA`= ".$def." WHERE `CEDULA`=".$row2["CEDULA"]." and `PERIODO` = '2015B'");
			$reg = "UPDATE `ProgramacionIT` SET `DEFINITIVA`= ".$def." WHERE `CEDULA`=".$row2["CEDULA"]." and `PERIODO` = '2015B'";
		}
		
		echo "<br>".$reg;
	}
	}

?>