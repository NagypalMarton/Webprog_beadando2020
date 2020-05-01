<?php
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
    try { 
        $dbh = new PDO('mysql:host=localhost;dbname=allatvedo', 'root', '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes =
        :bejelentkezes and jelszo = sha1(:jelszo)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
    echo "Hiba: ".$e->getMessage();
    }
    }
?>
 <?php if(isset($row)) { ?>
 <?php if($row) { ?>
 <h1>Bejelentkezett:</h1>
<strong><?= $row['id'] ?></strong><br><br>
<strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>
 <?php } else { ?> 
 <h1>A bejelentkezés nem sikerült!</h1>
 <a href="/temp/pages/belep-reg.tpl.php" >Próbálja újra!</a>
 <?php } ?>
 <?php } ?>