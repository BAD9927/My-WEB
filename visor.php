<html>
<head>
    <title>Formulario</title>
</head>
<body>
<?php
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$ciudad=$_POST["ciudad"];
$fecha =$_POST["fecha"];


$contenido= "
nombre: $nombre
telefono: $telefono
email: $email
ciudad:$ciudad
fecha:$fecha

";

$archivo = fopen("$nombre.txt", "w");
if ($archivo === false) {
    echo "Error al abrir el archivo.";
} else {
    if (fwrite($archivo, $contenido) === false) {
        echo "Error al escribir en el archivo.";
    } else {
        echo "<h2>Datos capturados correctamente</h2>";
    }
    fclose($archivo);
}
?>
</body>
</html>
