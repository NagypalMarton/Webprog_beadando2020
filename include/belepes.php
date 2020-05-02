<?php
if(isset($_POST['user_name']) && isset($_POST['user_passworld'])) {
    try { 
        $dbh = new PDO('mysql:host=localhost;dbname=allatvedo', 'root', '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sqlSelect = "select user_id, vezeteknev, keresztnev from users where bejelentkezes =
        :bejelentkezes and jelszo = sha1(:user_passworld)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['user_name'], ':jelszo' => $_POST['user_passworld']));
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
<strong><?= $row['user_id'] ?></strong><br><br>
<strong><?= $row['vezeteknev']." ".$row['keresztnev'] ?></strong>
 <?php } else { ?> 
 <center><h1>A bejelentkezés nem sikerült!</h1></center>
 <a href="/temp/pages/belep-reg.tpl.php" >Próbálja újra!</a>
 <?php } ?>
 <?php } ?>