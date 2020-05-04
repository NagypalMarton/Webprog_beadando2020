<?php
    if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['magassag']) && isset($_POST['orszag'])) {
        try {

            $dbh = new PDO('mysql:host=localhost;dbname=zh', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sqlSelect = "select id from regisztracio where nev = :nev";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':nev' => $_POST['nev']));
            if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $uzenet = "A név már foglalt!";
                $ujra = "true";
            }
            else {

                $sqlInsert = "insert into regisztracio(id, email, nev, magassag, orszag)
                              values(0, :email, :nev, :magassag, :orszag)";
                $stmt = $dbh->prepare($sqlInsert);
                $stmt->execute(array(':email' => $_POST['email'], ':nev' => $_POST['nev'],
                                    ':magassag' => $_POST['magassag'], ':orszag' => $_POST['orszag']));
                if($count = $stmt->rowCount()) {
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
        catch (PDOException $e) {
            echo "Hiba: ".$e->getMessage();
        }
    }
    else {
        header("Location: index.html");
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Regisztráció</title>
        <meta charset="utf-8">
<link rel="stylesheet" href="style.css">

    </head>
    <body>
        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a href="index.html">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </body>
</html>
