<?php
$tickt = "<h3>Ticket de registro al congreso Tecnologico</h3><br><br>";
if($_GET["nombre"]!=""){
	$nombre = $_GET["nombre"];
	$tickt .= "Nombre: ". $nombre. "<br><br>";
}else{
	$nombre = "NO SE ENVIO NINGUN NOMBRE";
	$tickt .= $nombre. "<br><br>"; 
}

if($_GET["escuela"]!=""){
	$escuela = $_GET["escuela"];
	$tickt .= "Escuela: ". $escuela. "<br><br>";
}else{
	$escuela = "NO SE ENVIO NINGUN INSTITUTO EDUCATIVO";
	$tickt .= $escuela. "<br><br>"; 
}

if($_GET["edad"]!=""){
	$edad = $_GET["edad"];
	$tickt .= "Edad del estudiante: ". $edad. "<br><br>";
}else{
	$edad = "NO SE ENVIO NINGUNA EDAD DEL ESTUDIANTE";
	$tickt .= $edad. "<br><br>"; 
}


if($_GET["genero"]!=""){
	$genero = $_GET["genero"];
	$tickt .= "Genero: ". $genero. "<br><br>";
}else{
	$genero = "NO SE IDENTIFICO EL GENERO";
	$tickt .= $genero. "<br><br>"; 
}

if($_GET["genero"]!=""){
	$genero = $_GET["genero"];
	$tickt .= "Genero: ". $genero. "<br><br>";
}else{
	$genero = "NO SE IDENTIFICO EL GENERO";
	$tickt .= $genero. "<br><br>"; 
}

if($_GET["interes"]!=""){
	$interes = $_GET["interes"];
	$tickt .= "Area de interes: ". implode(", ", $interes). "<br><br>";
}else{
	$interes = "NO SELECCIONO NINGUNA AREA DE INTERES";
	$tickt .= $interes. "<br><br>"; 
}

if($_GET["date"]!=""){
	$date= $_GET["date"];
	$tickt .= "Fecha de asistencia: ". $date. "<br><br>";
}else{
	$date = "NO SE SELECCIONO UNA FECHA";
	$tickt .= $date. "<br><br>"; 
}

if($_GET["asistencias"]!=""){
	$asistencias= $_GET["asistencias"];
	$tickt .= "Días que se asistiran: ". $asistencias. "<br><br>";
}else{
	$asistencias = "NO SE SELECCIONARON LOS DIAS QUE SE ASISTIRAN";
	$tickt .= $asistencias. "<br><br>"; 
}

if($_GET["email"]!=""){
	$email= $_GET["email"];
	$tickt .= "El correo electronico proporcionado es: ". $email. "<br><br>";
}else{
	$email = "NO SE ENCONTRO NINGUN CORREO ELECTRONICO";
	$tickt .= $email. "<br><br>"; 
}

echo $tickt;
?>
	