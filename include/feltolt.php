<?php

include('./include/config.inc.php');
 $uzenet = array();
 if (isset($_POST['kuld'])) {
foreach($_FILES as $fajl) {
 if ($fajl['error'] == 4);
 elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
 $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
 elseif ($fajl['error'] == 1
 or $fajl['error'] == 2
 or $fajl['size'] > $MAXMERET)
 $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
 else {
 $vegsohely = $MAPPA.strtolower($fajl['name']);
 if (file_exists($vegsohely))
 $uzenet[] = " Már létezik: " . $fajl['name'];
 else {
 move_uploaded_file($fajl['tmp_name'], $vegsohely);
 $uzenet[] = ' Ok: ' . $fajl['name'];
 }
 }
 }
 }