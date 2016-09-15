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
	$periodo=$_POST["periodo"];
	$x=1;
	$color="";
	$notas = new stdClass();
	$notas->lista = array();
	switch($materia)
	{ 
		case "programacionT":
			/*echo "<p style='color:red;font-size: 1.5em;'><b> Calificaciones Definitivas sujetas a modificacion hasta el 19/06 a las 8:00 AM cualquier duda o reclamo: uru.araujo@gmail.com</b></p>";*/
			
			
			$result = mysqli_query("SELECT  `CEDULA`, `APELLIDOS`, `NOMBRES`, `PARCIAL1`, `PARCIAL2`, `PARCIAL3`, `DEFT`, `DEFL`, `DEFINITIVA`, `SECCION`, `ASISTENCIA`, `PERIODO` FROM ProgramacionIT WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			
			
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	 $notas->lista[] = array('cedula' =>$row['CEDULA'], 'nombre' =>$row['NOMBRES'], 'apellido' =>$row['APELLIDOS'], 'nota1' =>$row['PARCIAL1'], 'nota2' =>$row['PARCIAL2'], 'nota3'=>$row['PARCIAL3'], 'deft'=>$row['DEFT'], 'defl'=>$row['DEFL'], 'def'=>$row['DEFINITIVA']);

			}
			
				$json = json_encode($notas);
				echo($json);
			
			break;
			
			case "programacionL":
	
			$result = mysqli_query("SELECT `CEDULA`, `APELLIDOS`, `NOMBRES`, `PARCIAL1`, `PARCIAL2`, `PARCIAL3`, `DEFINITIVA`, `SECCION`, `PROF`, `ASISTENCIA`, `PERIODO` FROM ProgramacionIL WHERE SECCION='".$seccion."' AND PERIODO='".$periodo."'");
			
			
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	$notas->lista[] = array('cedula' =>$row['CEDULA'], 'nombre' =>$row['NOMBRES'], 'apellido' =>$row['APELLIDOS'], 'nota1' =>$row['PARCIAL1'], 'nota2' =>$row['PARCIAL2'], 'nota3'=>$row['PARCIAL3'], 'def'=>$row['DEFINITIVA']);
	 
			}
				
				$json = json_encode($notas);
				echo($json);
				
			break;
			
			case "auditoria":
			$result = mysqli_query("SELECT `CEDULA`, `APELLIDOS`, `NOMBRES`, `1ER PARCIAL`, `CASOS`, `CASO FINAL`, `DEFINITIVA`, `SECCION`, `Asistencia`, `PERIODO` FROM Auditoria WHERE SECCION='".$seccion."'");
			
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				$notas->lista[] = array('cedula' =>$row['CEDULA'], 'nombre' =>$row['NOMBRES'], 'apellido' =>$row['APELLIDOS'], 'nota1' =>$row['1ER PARCIAL'], 'nota2' =>$row['CASOS'], 'nota3'=>$row['CASO FINAL'], 'def'=>$row['DEFINITIVA']);
					 
			}
			
				$json = json_encode($notas);
				echo($json);
			
			break;
			
			case "inteligencia":
			
			$result = mysqli_query("SELECT `CEDULA`, `APELLIDOS`, `NOMBRES`, `1ER PARCIAL`, `INVESTIGACIONES`, `PROYECTO`, `DEFINITIVA`, `SECCION`, `ASISTENCIA`, `PERIODO` FROM Inteligencia Artificial WHERE SECCION='".$seccion."'");
			
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	 $notas->lista[] = array('cedula' =>$row['CEDULA'], 'nombre' =>$row['NOMBRES'], 'apellido' =>$row['APELLIDOS'], 'nota1' =>$row['1ER PARCIAL'], 'nota2' =>$row['INVESTIGACIONES'], 'nota3'=>$row['PROYECTO'], 'def'=>$row['DEFINITIVA']);
			 	 
	 
			}
			
				$json = json_encode($notas);
				echo($json);
			
			break;
			
			//Teoria Redes II
			
			case "redesII":
			
			$result = mysqli_query("SELECT `CEDULA`, `APELLIDOS`, `NOMBRES`, `1er Parcial`, `Exposicion`, `Proyecto`, `Definitiva`, `Laboratorio`, `DEFINITIVA TOTAL`, `SECCION`, `ASISTENCIA`, `PERIODO` FROM Redes II WHERE SECCION='".$seccion."'");
			
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	
				$notas->lista[] = array('cedula' =>$row['CEDULA'], 'nombre' =>$row['NOMBRES'], 'apellido' =>$row['APELLIDOS'], 'nota1' =>$row['1er PARCIAL'], 'nota2' =>$row['Exposicion'], 'nota3'=>$row['Proyecto'], 'def'=>$row['Definitiva']);
			
			}
			
				$json = json_encode($notas);
				echo($json);
			
			break;
			
			//Laboratorio Redes II
			
			case "redesIIL":
			$result = mysqli_query("SELECT `CEDULA`, `APELLIDOS`, `NOMBRES`, `PARCIAL1`, `PARCIAL2`, `PARCIAL3`, `PARCIAL4`, `DEFINITIVA`, `SECCION`, `ASISTENCIA`, `PERIODO` FROM RedesIIL WHERE SECCION='".$seccion."'");
			
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	$notas->lista[] = array('cedula' =>$row['CEDULA'], 'nombre' =>$row['NOMBRES'], 'apellido' =>$row['APELLIDOS'], 'nota1' =>$row['PARCIAL1'], 'nota2' =>$row['PARCIAL2'], 'nota3'=>$row['PARCIAL3'], 'def'=>$row['DEFINITIVA']);
				
	 
			}
				$json = json_encode($notas);
				echo($json);
			break;
			
			//Tecnologia de Negocios
			
			case "TDN":
			$result = mysqli_query("SELECT `Cedula`, `Apellidos`, `Nombres`, `PARCIAL1`, `PARCIAL2`, `PARCIAL3`, `DEFINITIVA`, `SECCION`, `PERIODO`, `ASISTENCIA` FROM Tecnologia de Negocios WHERE SECCION='".$seccion."'");
			
			while($row = mysqli_fetch_array($result))
			{ 
				
			 	$notas->lista[] = array('cedula' =>$row['Cedula'], 'nombre' =>$row['Nombres'], 'apellido' =>$row['Apellidos'], 'nota1' =>$row['PARCIAL1'], 'nota2' =>$row['PARCIAL2'], 'nota3'=>$row['PARCIAL3'], 'def'=>$row['DEFINITIVA']);
				
	 
			}
				$json = json_encode($notas);
				echo($json);
			break;
		
	}
}
?>