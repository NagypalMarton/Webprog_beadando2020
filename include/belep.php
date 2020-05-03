<?php
if(isset($_POST['user_name']) && isset($_POST['user_passworld'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=allatvedo', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhsználó keresése
        $sqlSelect = "select id, vezeteknev, keresztnev from users where user_name = :user_name and user_passworld = sha1(:user_passworld)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':user_name' => $_POST['user_name'], ':user_passworld' => $_POST['user_passworld']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['csn'] = $row['vezeteknev']; $_SESSION['un'] = $row['keresztnev']; $_SESSION['login'] = $_POST['user_name'];
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
