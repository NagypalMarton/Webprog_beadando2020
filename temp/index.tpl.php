<!-- konfig adatokat helyezünk el, amelyek minden oldallekérés esetén szükségesek lesznek -->
<html lang="hu"> <!-- Böngészővel tudajuk, hogy az oldal nyelve magyar lesz -->
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="/imagines/favicon.ico">
<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
<link rel="stylesheet" href="./styles/index.css" type="text/css">
<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<div id="felsomenu"> 
<ul> 
<?php foreach ($oldalak as $url => $oldal) {
if($oldal['menu']) { ?>
<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
<?= $oldal['szoveg'] ?></a>
</li>
<?php }
} ?>
</ul>
</div>
<header> 
<img src="./imagines/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
<h1><?= $fejlec['cim'] ?></h1>
</header>
<div id="wrapper"> 
            <?php include("./temp/pages/{$keres['fajl']}.tpl.php"); ?>
</div>

<footer>
<?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?><?php } ?>
&nbsp;
<?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
</footer>
</body>
</html>