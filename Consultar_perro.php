<?php
//conexion a la Base de datos (Servidor,usuario,password)
$link = mysqli_connect("localhost", "root","");

//(nombre de la base de datos, $enlace) 
mysqli_select_db($link,"relocadb");

//capturando datos
$v2 = $_REQUEST['Nombre'];

//conuslta SQL
$result = mysqli_query($link, "select * from Perro where Nombre like '".$v2."'");

//cuantos reultados hay en la buesqueda
$num_resultados = mysqli_num_rows($result);
echo "<p>Número de perros encontrados: ".$num_resultados."</p>";

//mostrando informacion de los perros y detalle
for ($i=0; $i <$num_resultados; $i++) { 
    $row = mysqli_fetch_array($result); 
    echo ($i+1);
    echo "</br> DNI : ".$row["DNI"];
    echo " </br>Nombre : ".$row["Nombre"];
    echo " </br>Raza : ".$row["Raza"];
    echo "</br>Genero : ".$row["Genero"]; 
    echo "</br>Nacio en : ".$row["FechaNacimiento"]; 
    echo "</p>";
}
?> 