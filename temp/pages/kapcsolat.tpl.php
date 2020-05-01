<aside id="oldaldoboz"> <!-- nav -->
            <nav>
                <ul>
					<?php foreach ($oldaldoboz as $url => $oldal) { ?>
						<li<?= (($oldaldoboz == $oldal) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == './temp/pages/') ? '.' : ('?oldal=' . $url) ?>">
						<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
                </ul>
            </nav>
</aside>
<div id="tartalom">
<div id="cim">
Közvetlen kapcsolatfelvétel


<div id="urlap">
<form method="POST">

<?php
// Első emgjelenítésnél a $_POST tömb üres, ezért az első egysébe nem lép be.
if(isset($_POST["nev"]) && isset($_POST["email"]) )

$nev = $_POST["nev"];
$email = $_POST["email"];
$uzenet = $_POST["uzenet"];
?>

<h4 class="box"> Név:</h4>
<input type="text" name='nev' value=" " required pattern="[a-zA-Z]+[" "]{2,25}$">

<h4 class="inside">E-mail</h4>
<input type="text" name='email' value=" " required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">

<div class="box">
<h4 class="inside">Üzenet</h4>
<textarea name='uzenet' required></textarea>
<br>
<input type="submit" value="Email küldése">
</div>
</form>

<?php if(isset($nev)) echo "<h2>Beküldött levél:<br></h2>Név:<strong>".$nev."</strong><br> E-mail: <strong>".$email."</strong><br> Üzenet: <strong>".$uzenet."<strong><br>"; ?>
</div>
</div>
</div>