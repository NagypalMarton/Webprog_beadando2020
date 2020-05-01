<?php
// Írjuk ide ideiglenesen: print_r($_POST);
 if(isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) &&
isset($_POST['utonev'])) {
// Próbáljuk ki: a regisztracio.php –t hívjuk meg külön.
// ha a pelda.html oldalról jutottunk ide, akkor ezek az adatok be vannak állítva.
 try { // CATCH-ig
 // Kapcsolódás: mint az előzőnél
 $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
 array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
 $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

 // Létezik már a felhasználói név?: le kell előtte kérdezni
// bejelentkezes: mező neve a táblában: felhasználónév
 $sqlSelect = "select id from felhasznalok where bejelentkezes = :bejelentkezes";
 $sth = $dbh->prepare($sqlSelect);
 $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
// ha már létezik ilyen felhasználó: kipróbálni!
 if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
// az $uzenet és $ujra változókat felhasználjuk majd az oldalon.
 $uzenet = "A felhasználói név már foglalt!";
 $ujra = "true";
 }
 else {
     // Ha nem létezik, akkor regisztráljuk
 $sqlInsert = "insert into felhasznalok(id, csaladi_nev, uto_nev, bejelentkezes, jelszo)
 values(0, :csaladinev, :utonev, :bejelentkezes, :jelszo)";
 $stmt = $dbh->prepare($sqlInsert);
 $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':utonev' => $_POST['utonev'],
 ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => sha1($_POST['jelszo'])));
// a PDOStatement osztály rowCount() metódusa visszadja azon sorok számát, amelyekre hatással volt //
az előző SQL utasítás
// http://php.net/manual/en/pdostatement.rowcount.php
 if($count = $stmt->rowCount()) {
// ha hatással volt egy rekordra, akkor a regisztráció sikeres.
// A PDO osztály lastInsertId() metódusa megadja a az utoljára beszúrt sor ID-jét.
 $newid = $dbh->lastInsertId();
 $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";
 $ujra = false;
 }
 else {
 $uzenet = "A regisztráció nem sikerült.";
 $ujra = true;
 }
 }
 }
 catch (PDOException $e) { // ha pl. nem találja az adatbázist
 echo "Hiba: ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Regisztráció</title>
 <meta charset="utf-8">
 </head>
 <body>
 <?php if(isset($uzenet)) { ?>
 <h1><?= $uzenet ?></h1>
 <?php if($ujra) { ?>
 <a href="\temp\pages\belep-reg.tpl.php">Próbálja újra!</a>
 <?php } ?>
 <?php } ?>
 </body>
</html>