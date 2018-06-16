<?php
include 'clases/RemplazarMultiplos.php';
//Definir el numero de elementos $elementos = range(desde,hasta) 
$elementos = range(1,100);
//Definir las condiciones para la sustitucion
//FORMATO $condiciones = array("PalabraParaRemplazar"=>(numero),"OtraPalabra"=>(otronumero,otronumero,...));
$condiciones = array(
    "Linio" => array(3),
    "IT" => array(5),
    "Linianos" => array(3,5)
);

$lista = new RemplazarMultiplos();
$lista->aplicarCondiciones($elementos,$condiciones);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Linio - Backend Challenge!</title>
</head>

<body>
<h1>Lista de numeros</h1>
<ul>
<?php
$lista->mostrarElementosLista();
?>
</ul>
</body>
</html>