<?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <h1>Bejelentkezett:</h1>
        Azonosító: <strong><?= $row['user_id'] ?></strong><br><br>
        Név: <strong><?= $row['vezeteknev']." ".$row['keresztnev'] ?></strong>
    <?php } else { ?>
        <h1>A bejelentkezés nem sikerült! Rossz felhasználónév vagy jelszó!</h1>
        <a href="?oldal=belepes" >Próbálja újra!</a>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <h2><?= $errormessage ?></h2>
<?php } ?>
