<?php //paraméterek beállítása, "sablon"
$ablakcim = array(
    'cim' => 'Álomfogó Alapítvány',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Országos Állatvédőrség Alapítvány',
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Országos Állatvédőrség Alapítvány – Minden jog fenntartva'
);

$oldalak = array(
	'/' => array('fajl' => 'index', 'szoveg' => 'Kezdőlap', 'menu' => 1), //'menu' => 1(megjeleníti) V 0 (nem jeleníti meg)
	'blog' => array('fajl' => 'blog', 'szoveg' => 'Blog', 'menu' => 1),
	'elerhetoseg' => array('fajl' => 'elerhetoseg', 'szoveg' => 'Elérhetőség', 'menu' => 1),
	'rolunk' => array('fajl' => 'aboutme', 'szoveg' => 'Rólunk','menu' => 1),
	'projektjeink' => array('fajl' => 'projektjeink', 'szoveg' => 'Projektjeink','menu' => 0),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat','menu' => 0),
);

$oldaldoboz=array(
'projektjeink' => array('fajl' => 'projektjeink', 'szoveg' => 'Projektjeink','menu' => 1),
'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat','menu' => 1),
);
$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>