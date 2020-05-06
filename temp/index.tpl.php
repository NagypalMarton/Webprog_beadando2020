<!-- konfig adatokat helyezünk el, amelyek minden oldallekérés esetén szükségesek lesznek -->
<?php session_start(); ?><!-- Adatbázis kezeléshez -->
<?php if(file_exists('./include/'.$keres['fajl'].'.php')) { include("./include/{$keres['fajl']}.php"); } ?>
<html lang="hu"> <!-- Böngészővel tudatjuk, hogy az oldal nyelve magyar lesz -->
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="/imagines/favicon.ico">
<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
<link rel="stylesheet" href="./styles/index.css" type="text/css">
<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<div id="felsomenu"> 
<ul> 
<?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
</ul>
</div>
<header> 
<img src="./imagines/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
<h1><?= $fejlec['cim'] ?></h1>
<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?> <!-- Adatbázis kezeléshez -->
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