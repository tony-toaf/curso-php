<?php

//echo "creando arrays";
/*
$semana[] = "lunes";

$semana[] = "miercoles";

$semana[] = "jueves";

echo $semana[1];
*/

/*
$semana = array("lunes", "maryes", "miercoles");

echo $semana[1];

*/

$dato = array("nombre" => "juan", "apellido" => "Alonzo"); //array asociativo

/*
echo $dato["nombre"]."<br>";
echo $dato["apellido"];
*/

/*
if (is_array($dato)) {
	echo "lo es";

}else{
	echo "no es";
}
*/
echo count($dato);

foreach ($dato as $key => $value) {
	echo "A $key le corresponde $value <br>";
}

?>