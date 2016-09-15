<?php
	
		if(!(empty($_POST["x"]) or empty($_POST["y"])))
		{	
			include "conex_notas.php";
			$query = mysqli_query($con,"select * from `Administrador` WHERE `Usuario` like '".$_POST["x"]."' AND `Clave` like '".$_POST["y"]."';");
			if($row = mysqli_fetch_array($query))
			{
				echo 1;	
			}
			else
			{
				echo 0;
			}
		
		}
		
	
	
?>