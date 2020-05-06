<?php //paraméterek beállítása, "sablon"
$ablakcim = array(
    'cim' => 'Országos Állatvédőrség Alapítvány',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Az állatok nagy, jogfosztott, néma többség, amely csak a mi segítségünkkel maradhat fenn.<br>/ Gerald Durrell /',
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Országos Állatvédőrség Alapítvány'
);

$oldalak = array(
	'/' => array('fajl' => 'index', 'szoveg' => 'Kezdőlap', 'menun' => array(1,1)), //'menu' => 1(megjeleníti) V 0 (nem jeleníti meg)
	'orokbefogad' => array('fajl' => 'orokbefogad', 'szoveg' => 'Örökbefogadás', 'menun' => array(1,1)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galléria', 'menun' => array(1,1)),
	'elerhetoseg' => array('fajl' => 'elerhetoseg', 'szoveg' => 'Elérhetőség', 'menun' => array(1,1)),
	'rolunk' => array('fajl' => 'aboutme', 'szoveg' => 'Rólunk','menun' => array(1,1)),
	
	'belep-reg' => array('fajl' => 'belep-reg', 'szoveg' => 'Belépés/Regisztráció','menun' => array(1,0)),
	'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
	'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
	'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
	'of_feldolgoz' => array('fajl' => 'of_feldolgoz', 'szoveg' => '', 'menun' => array(0,0)),
	'of_regisztracio' => array('fajl' => 'of_regisztracio', 'szoveg' => '', 'menun' => array(0,0)),
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
//Galléria
$MAPPA = '/images/users_img/';
 $TIPUSOK = array ('.jpg', '.png');
 $MEDIATIPUSOK = array('/images/users_img/jpeg', '/images/users_img/png');
 $DATUMFORMA = "Y.m.d. H:i";
 $MAXMERET = 250*512;
 ?>