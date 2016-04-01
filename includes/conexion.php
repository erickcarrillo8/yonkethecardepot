<?php
$host='uriel.hosting-mexico.net';
$db_usuario='yonkethe_usuario';
$db_password='transmision1.';
$baseDatos='yonkethe_cardepot';

$mysqli = new mysqli($host, $db_usuario, $db_password, $baseDatos);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>