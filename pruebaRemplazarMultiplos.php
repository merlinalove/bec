<?php
include 'clases/RemplazarMultiplos.php';
 
$elementos = range(1,100);
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