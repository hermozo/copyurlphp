<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE") ;



$data = $_POST["pdf"];
$url = $data;



$source = file_get_contents($url);
file_put_contents('resultados/'.rand(1,99999).'.pdf', $source);
echo 'Se ha descargado el CSV';

if (move_uploaded_file("http://www4.tecnun.es/asignaturas/Informat1/AyudaInf/aprendainf/Java/Java2.pdf", "resultados" . '1.pdf')) {
    echo "bien";
}else{
	echo "na";
}

 ?>