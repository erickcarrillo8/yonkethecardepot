<?php
if (!isset($_GET['pages'])) {
    include("pages/homepage.php");
} else {  
	

	
    include("pages/".$_GET['pages'].".php");

  
}
?>