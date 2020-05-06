<?php
include('./include/config.inc.php');

//$keres = current($oldalak);
$keres = $oldalak['/'];
if (isset($_GET['oldal'])) {
	if (isset($oldalak[$_GET['oldal']]) && file_exists("./temp/pages/{$oldalak[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $oldalak[$_GET['oldal']];
	}
	else if (isset($extrak[$_GET['oldal']]) && file_exists("./temp/pages/{$extrak[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $extrak[$_GET['oldal']];
	}
	else { 
		$keres = $hiba_oldal;
		header("HTTP/1.0 404 Not Found");
	}
}

include('./temp/index.tpl.php'); 
?>