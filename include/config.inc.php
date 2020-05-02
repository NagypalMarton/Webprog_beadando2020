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
	'blog' => array('fajl' => 'blog', 'szoveg' => 'Blog', 'menun' => array(1,1)),
	'gallery' => array('fajl' => 'gallery', 'szoveg' => 'Galéria', 'menun' => array(0,1)),
	'elerhetoseg' => array('fajl' => 'elerhetoseg', 'szoveg' => 'Elérhetőség', 'menun' => array(1,1)),
	'rolunk' => array('fajl' => 'aboutme', 'szoveg' => 'Rólunk','menun' => array(1,1)),
	'belep-reg' => array('fajl' => 'belep-reg', 'szoveg' => 'Belépés/Regisztráció','menu' => array(1,0)),
	'belepes' => array('fajl' => 'belepes', 'szoveg' => '', 'menun' => array(0,0)),
	'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
	'regisztracio' => array('fajl' => 'regisztracio', 'szoveg' => '', 'menun' => array(0,0))
);

$oldaldoboz=array(
'projektjeink' => array('fajl' => 'projektjeink', 'szoveg' => 'Projektjeink','menun' => array(1,1)),
'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat','menun' => array(1,1)),
);
$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
$MAPPA = 'users_img/';
 $TIPUSOK = array ('.jpg', '.png');
 $MEDIATIPUSOK = array('images/users_img/jpeg', 'images/users_img/png');
 $DATUMFORMA = "Y.m.d. H:i";
 $MAXMERET = 250*512;
?>