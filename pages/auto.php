<?php 


$id = $_GET['id'];
$ano =  $_GET['ano'] ;
$marca =  $_GET['marca'];
$modelo = $_GET['modelo'];




echo ConsultaAuto($id);












?>

<script type="text/javascript">
	
	var obj = jQuery.parseJSON( '{"id_auto":"14","modelo":"Accord","marca":"Honda","ano":"1991","motor":"2.2","transmision":"Aut","detalles":"","foto":"autos\/IMG_20140616_104001.jpg","foto2":"autos\/IMG_20140616_104009.jpg","foto3":"autos\/IMG_20140616_104053.jpg","foto4":"autos\/IMG_20140616_104121.jpg","foto5":"autos\/IMG_20140616_103951.jpg"}');
	alert(obj.modelo)
</script>
