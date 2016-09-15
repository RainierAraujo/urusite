<?php
header('Content-Type: text/xml; charset=ISO-8859-1'); 
include "conex_notas.php";

// Check connection
if (mysqli_connect_errno())
  {
 	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{	
	$materia=$_POST["materia"];
	$seccion=$_POST["seccion"];
	$periodo='2015B';
	$x=1;
	$color="";
	
	switch($materia)
	{ 
		case "programacionT":
			echo "<p style='color:red;font-size: 1.5em;'><b> Calificaciones ya incluyen puntos del taller</b></p>";
			$x=1;
			
			$result = mysqli_query($con,"SELECT `CEDULA`, `APELLIDOS`, `NOMBRES`, `PARCIAL1`, `PARCIAL2`, `PARCIAL3`, `DEFT`, `DEFL`, `DEFINITIVA`, `SECCION`, `ASISTENCIA`, `PERIODO` FROM `ProgramacionIT`  WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			echo "<table border='1' style='width:100%'>
			<tr bgcolor='#A9E2F3'>
			<th>C.I</th>
			<th>Nombre</th>
			<th>1er Pacial</th>
			<th>2do Pacial</th>
			
			<th>Def T</th>
			<th>Def L</th>
			<th>Definitiva</th>
			</tr>";
			$bgcolor="";
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				if($x==0)
				{	
				 	$bgcolor="bgcolor='#E0E0F8'";
				    	$x++;
				}
				else
			 	{
					$bgcolor="";
					$x=0;
			 	}
			 	 echo "<tr ".$bgcolor.">";
			 	 echo "<td align='center'>" . $row['CEDULA'] . "</td>";
			 	 echo "<td align='center'>" . $row['NOMBRES'] ." ". $row['APELLIDOS'] ."</td>";
			 	 echo "<td align='center'>" .$row['PARCIAL1']. "</td>";
			 	 echo "<td align='center'>" . $row['PARCIAL2'] . "</td>";
			 	// echo "<td align='center'>" . $row['PARCIAL3'] . "</td>";
			 	 echo "<td align='center'><b>" . $row['DEFT'] . "</td>";
			 	 echo "<td align='center'><b>" . $row['DEFL'] . "</td>";
			 	 if ($row['DEFINITIVA']<10)
			 	 {
			 	 	$color="red";
			 	 }
			 	 else if($row['DEFINITIVA']>=10 && $row['DEFINITIVA']<18)
			 	 {
			 	 	$color="blue";
			 	 }
			 	 else if($row['DEFINITIVA']>=18)
			 	 {
			 	 	$color="green";
			 	 }
			 	 echo "<td align='center' style='color:".$color."'><b>" . $row['DEFINITIVA'] . "</b></td>";
			 	 echo "</tr>";
	 
			}
			
			
				echo "</table>";
			
			break;
			
			
			
			case "marcolegal":
			
			$x=1;
			
			$result = mysqli_query($con,"SELECT `CEDULA`, `APELLIDOS`, `NOMBRES`, `PARCIAL1`, `PARCIAL2`, `PARCIAL3`,`DEFINITIVA`,  `PERIODO` FROM `Marco Legal`  WHERE  PERIODO='".$periodo."'");
			echo "<table border='1' style='width:100%'>
			<tr bgcolor='#A9E2F3'>
			<th>C.I</th>
			<th>Nombre</th>
			<th>1er Pacial</th>
			<th>2do Pacial</th>
			
			<th>3er Pacial</th>
			<th>Definitiva</th>
			</tr>";
			$bgcolor="";
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				if($x==0)
				{	
				 	$bgcolor="bgcolor='#E0E0F8'";
				    	$x++;
				}
				else
			 	{
					$bgcolor="";
					$x=0;
			 	}
			 	 echo "<tr ".$bgcolor.">";
			 	 echo "<td align='center'>" . $row['CEDULA'] . "</td>";
			 	 echo "<td align='center'>" . $row['NOMBRES'] ." ". $row['APELLIDOS'] ."</td>";
			 	 echo "<td align='center'>" .$row['PARCIAL1']. "</td>";
			 	 echo "<td align='center'>" . $row['PARCIAL2'] . "</td>";
			         echo "<td align='center'>" . $row['PARCIAL3'] . "</td>";
			 	
			 	 if ($row['DEFINITIVA']<10)
			 	 {
			 	 	$color="red";
			 	 }
			 	 else if($row['DEFINITIVA']>=10 && $row['DEFINITIVA']<18)
			 	 {
			 	 	$color="blue";
			 	 }
			 	 else if($row['DEFINITIVA']>=18)
			 	 {
			 	 	$color="green";
			 	 }
			 	 echo "<td align='center' style='color:".$color."'><b>" . $row['DEFINITIVA'] . "</b></td>";
			 	 echo "</tr>";
	 
			}
			
			
				echo "</table>";
			
			break;
			
			
			case "programacionL":
echo "<p style='color:red;font-size: 1.5em;'><b> Calificaciones ya incluyen los puntos extra</b></p>";
			$x=1;
			echo "<table border='1' style='width:100%'>
			<tr bgcolor='#A9E2F3'>
			<th>C.I</th>
			<th>Nombre</th>
			<th>1er Pacial</th>
			<th>2do Pacial</th>
			
			
			<th>Definitiva</th>
			</tr>";
			$result = mysqli_query($con,"SELECT * FROM `ProgramacionIL` WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
					
		
			$bgcolor="";
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				if($x==0)
				{	
				 	$bgcolor="bgcolor='#E0E0F8'";
				    	$x++;
				}
				else
			 	{
					$bgcolor="";
					$x=0;
			 	}
			 	 echo "<tr ".$bgcolor.">";
			 	 echo "<td align='center'>" . $row['CEDULA'] . "</td>";
			 	 echo "<td align='center'>" . $row['NOMBRES'] ." ". $row['APELLIDOS'] ."</td>";
			 	 echo "<td align='center'>" . $row['PARCIAL1']. "</td>";
			 	 echo "<td align='center'>" . $row['PARCIAL2'] . "</td>";
			 	// echo "<td align='center'>" . $row['PARCIAL3'] . "</td>";
			 				 	
			 	 if ($row['DEFINITIVA']<10)
			 	 {
			 	 	$color="red";
			 	 }
			 	 else if($row['DEFINITIVA']>=10 && $row['DEFINITIVA']<18)
			 	 {
			 	 	$color="blue";
			 	 }
			 	 else if($row['DEFINITIVA']>=18)
			 	 {
			 	 	$color="green";
			 	 }
			 	 echo "<td align='center' style='color:".$color."'><b>" . $row['DEFINITIVA'] . "</b></td>";
			 	 echo "</tr>";
	 
			}
			
			
				echo "</table>";
			
			break;
			
			
			case "TN":
			$x=1;
			//echo "SELECT * FROM `Tecnologia de Negocios` WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'";
			$result = mysqli_query($con,"SELECT * FROM `Tecnologia de Negocios` WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			echo "<table border='1' style='width:100%'>
			<tr bgcolor='#A9E2F3'>
			<th>C.I</th>
			<th>Nombre</th>
			<th>1er Pacial</th>
			<th>2do Pacial</th>
			<th>3er Pacial</th>
			<th>Def</th>
			</tr>";
			$bgcolor="";
			//print_r("SELECT * FROM `Tecnologia de Negocios` WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				if($x==0)
				{	
				 	$bgcolor="bgcolor='#E0E0F8'";
				    	$x++;
				}
				else
			 	{
					$bgcolor="";
					$x=0;
			 	}
			 	 echo "<tr ".$bgcolor.">";
			 	 echo "<td align='center'>" . $row['CEDULA'] . "</td>";
			 	 echo "<td align='center'>" . $row['Nombres'] ." ". $row['Apellidos'] ."</td>";
			 	 echo "<td align='center'>" .$row['PARCIAL1']. "</td>";
			 	 echo "<td align='center'>" . $row['PARCIAL2'] . "</td>";
			 	 echo "<td align='center'>" . $row['PARCIAL3'] . "</td>";
			 	 if ($row['DEFINITIVA']<10)
			 	 {
			 	 	$color="red";
			 	 }
			 	 else if($row['DEFINITIVA']>=10 && $row['DEFINITIVA']<18)
			 	 {
			 	 	$color="blue";
			 	 }
			 	 else if($row['DEFINITIVA']>=18)
			 	 {
			 	 	$color="green";
			 	 }
			 	 echo "<td align='center' style='color:".$color."'><b>" . $row['DEFINITIVA'] . "</b></td>";
			 	 echo "</tr>";
			 	 
	 
			}
			
			
				echo "</table>";
			
			break;
			
			
			case "auditoria":
			$x=1;
			$result = mysqli_query($con,"SELECT * FROM Auditoria WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			echo "<table border='1' style='width:100%'>
			<tr bgcolor='#A9E2F3'>
			<th>C.I</th>
			<th>Nombre</th>
			<th>1er Pacial</th>
			<th>Casos</th>
			<th>Caso Final</th>
			<th>Def</th>
			</tr>";
			$bgcolor="";
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				if($x==0)
				{	
				 	$bgcolor="bgcolor='#E0E0F8'";
				    	$x++;
				}
				else
			 	{
					$bgcolor="";
					$x=0;
			 	}
			 	 echo "<tr ".$bgcolor.">";
			 	 echo "<td align='center'>" . $row['CEDULA'] . "</td>";
			 	 echo "<td align='center'>" . $row['NOMBRES'] ." ". $row['APELLIDOS'] ."</td>";
			 	 echo "<td align='center'>" .$row['1ER PARCIAL']. "</td>";
			 	 echo "<td align='center'>" . $row['CASOS'] . "</td>";
			 	 echo "<td align='center'>" . $row['CASO FINAL'] . "</td>";
			 	 if ($row['DEFINITIVA']<10)
			 	 {
			 	 	$color="red";
			 	 }
			 	 else if($row['DEFINITIVA']>=10 && $row['DEFINITIVA']<18)
			 	 {
			 	 	$color="blue";
			 	 }
			 	 else if($row['DEFINITIVA']>=18)
			 	 {
			 	 	$color="green";
			 	 }
			 	 echo "<td align='center' style='color:".$color."'><b>" . $row['DEFINITIVA'] . "</b></td>";
			 	 echo "</tr>";
			 	 
	 
			}
			
			
				echo "</table>";
			
			break;
			
				case "inteligencia":
			$x=1;
			$result = mysqli_query($con,"SELECT * FROM `Inteligencia Artificial` WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			echo "<table border='1' style='width:100%'>
			<tr bgcolor='#A9E2F3'>
			<th>C.I</th>
			<th>Nombre</th>
			<th>1er Pacial</th>
			<th>Investigaciones</th>
			<th>Proyecto</th>
			<th>Definitiva</th>
			</tr>";
			$bgcolor="";
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				if($x==0)
				{	
				 	$bgcolor="bgcolor='#E0E0F8'";
				    	$x++;
				}
				else
			 	{
					$bgcolor="";
					$x=0;
			 	}
			 	 echo "<tr ".$bgcolor.">";
			 	 echo "<td align='center'>" . $row['CEDULA'] . "</td>";
			 	 echo "<td align='center'>" . $row['NOMBRES'] ." ". $row['APELLIDOS'] ."</td>";
			 	 echo "<td align='center'>" .$row['1ER PARCIAL']. "</td>";
			 	 echo "<td align='center'>" . $row['INVESTIGACIONES'] . "</td>";
			 	 echo "<td align='center'>" . $row['PROYECTO'] . "</td>";
			 	  if ($row['DEFINITIVA']<10)
			 	 {
			 	 	$color="red";
			 	 }
			 	 else if($row['DEFINITIVA']>=10 && $row['DEFINITIVA']<18)
			 	 {
			 	 	$color="blue";
			 	 }
			 	 else if($row['DEFINITIVA']>=18)
			 	 {
			 	 	$color="green";
			 	 }
			 	 echo "<td align='center' style='color:".$color."'><b>" . $row['DEFINITIVA'] . "</b></td>";
			 	 echo "</tr>";
	 
			}
			
			
				echo "</table>";
				break;
			
			case "redesII":
			$x=1;
			$result = mysqli_query($con,"SELECT * FROM `Redes II` WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			echo "<table border='1' style='width:100%'>
			<tr bgcolor='#A9E2F3'>
			<th>C.I</th>
			<th>Nombre</th>
			<th>1er Pacial</th>
			<th>Exposicion</th>
			<th>Proyecto</th>
			<th>Def</th>
			</tr>";
			$bgcolor="";
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				if($x==0)
				{	
				 	$bgcolor="bgcolor='#E0E0F8'";
				    	$x++;
				}
				else
			 	{
					$bgcolor="";
					$x=0;
			 	}
			 	 echo "<tr ".$bgcolor.">";
			 	 echo "<td align='center'>" . $row['CEDULA'] . "</td>";
			 	 echo "<td align='center'>" . $row['NOMBRES'] ." ". $row['APELLIDOS'] ."</td>";
			 	 echo "<td align='center'>" .$row['1er Parcial']. "</td>";
			 	 echo "<td align='center'>" . $row['Exposicion'] . "</td>";
			 	 echo "<td align='center'>" . $row['Proyecto'] . "</td>";
			 	 if ($row['Definitiva']<10)
			 	 {
			 	 	$color="red";
			 	 }
			 	 else if($row['Definitiva']>=10 && $row['Definitiva']<18)
			 	 {
			 	 	$color="blue";
			 	 }
			 	 else if($row['Definitiva']>=18)
			 	 {
			 	 	$color="green";
			 	 }
			 	 echo "<td align='center' style='color:".$color."'><b>" . $row['Definitiva'] . "</b></td>";
			 	 echo "</tr>";
	 
			}
			
			
				echo "</table>";
			
			break;
			
			case "redesIIL":
			$x=1;
			$result = mysqli_query($con,"SELECT * FROM `RedesIIL` WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			echo "<table border='1' style='width:100%'>
			<tr bgcolor='#A9E2F3'>
			<th>C.I</th>
			<th>Nombre</th>
			<th>1er Informe</th>
			<th>2do Informe</th>
			<th>3er Informe</th>
			<th>Def</th>
			</tr>";
			$bgcolor="";
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				if($x==0)
				{	
				 	$bgcolor="bgcolor='#E0E0F8'";
				    	$x++;
				}
				else
			 	{
					$bgcolor="";
					$x=0;
			 	}
			 	 echo "<tr ".$bgcolor.">";
			 	 echo "<td align='center'>" . $row['CEDULA'] . "</td>";
			 	 echo "<td align='center'>" . $row['NOMBRES'] ." ". $row['APELLIDOS'] ."</td>";
			 	 echo "<td align='center'>" .$row['PARCIAL1']. "</td>";
			 	 echo "<td align='center'>" . $row['PARCIAL2'] . "</td>";
			 	 echo "<td align='center'>" . $row['PARCIAL3'] . "</td>";
			 	 if ($row['DEFINITIVA']<10)
			 	 {
			 	 	$color="red";
			 	 }
			 	 else if($row['DEFINITIVA']>=10 && $row['DEFINITIVA']<18)
			 	 {
			 	 	$color="blue";
			 	 }
			 	 else if($row['DEFINITIVA']>=18)
			 	 {
			 	 	$color="green";
			 	 }
			 	 echo "<td align='center' style='color:".$color."'><b>" . $row['DEFINITIVA'] . "</b></td>";
			 	 echo "</tr>";
	 
			}
			
			
				echo "</table>";
			
			break;
		
	}
}
?>