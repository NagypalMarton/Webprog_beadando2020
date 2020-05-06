<?php
    if(isset($_POST['orokbefogado_neve']) && isset($_POST['orokbefogado_cime']) && isset($_POST['orokbefogado_telefonszama']) && isset($_POST['orokbefogadott_allatneve'])) {
        try {

            $dbh = new PDO('mysql:host=localhost;dbname=allatvedo', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sqlSelect = "select orokbefogadott_allatneve from regisztracio where orokbefogado_neve = :orokbefogado_neve";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':orokbefogado_neve' => $_POST['orokbefogado_neve']));
            if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $uzenet = "AZ örökbefogadó már fogadott örökbe kisallátot!";
                $ujra = "true";
            }
            else {

                $sqlInsert = "insert into orokbefogad(orokbefogadas_id, orokbefogado_cime, orokbefogado_neve, orokbefogado_telefonszama, orokbefogadott_allatneve)
                              values(0, :orokbefogado_cime, :orokbefogado_neve, :orokbefogado_telefonszama, :orokbefogadott_allatneve)";
                $stmt = $dbh->prepare($sqlInsert);
                $stmt->execute(array(':orokbefogado_cime' => $_POST['orokbefogado_cime'], ':orokbefogado_neve' => $_POST['orokbefogado_neve'],
                                    ':orokbefogado_telefonszama' => $_POST['orokbefogado_telefonszama'], ':orokbefogadott_allatneve' => $_POST['orokbefogadott_allatneve']));
                if($count = $stmt->rowCount()) {
                    $newid = $dbh->lastInsertId();
                    $uzenet = "Az örökbefogadás sikeres!<br>Az örökbefogadás azonosítója: {$newid}";
                    $ujra = false;
                }
                else {
                    $uzenet = "Az örökbefogadása nem sikerült!";
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
                <a href="?oldal=orokbefogad">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </body>
</html>
