<?php
include_once('./include/config.inc.php');

$keres = current($oldalak);
if (isset($_GET['oldal'])) {
	if (isset($oldalak[$_GET['oldal']]) && file_exists("./temp/pages/{$oldalak[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $oldalak[$_GET['oldal']];
	}
	else { 
		$keres = $hiba_oldal;
		header("HTTP/1.0 404 Page Not Found");
		}
}
include_once('./temp/index.tpl.php'); 
?>
