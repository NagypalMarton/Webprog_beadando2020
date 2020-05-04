		<?php
			//szerver oldali ellenőrzés példa
			if (!isset($_POST['orokbefogado_neve']) || empty($_POST['orokbefogado_neve']) || strlen($_POST['orokbefogado_neve']) < 10 || strlen($_POST['orokbefogado_neve']) > 40) {
				echo "Név: ".$_POST['orokbefogado_neve']. " Hibás!<br>";
		    $helyes = false;
			} else {
						echo "Név: ".$_POST['orokbefogado_neve']. " Helyes!<br>";
						$helyes = true;
			}
		
			if (!isset($_POST['orokbefogado_neve']) || empty($_POST['orokbefogado_neve']) || strlen($_POST['orokbefogado_neve']) < 10 || strlen($_POST['orokbefogado_neve']) > 40) {
				echo "Név: ".$_POST['orokbefogado_neve']. " Hibás!<br>";
		    $helyes = false;
			} else {
						echo "Név: ".$_POST['orokbefogado_neve']. " Helyes!<br>";
						$helyes = true;
			}
			
			if (!isset($_POST['magassag']) || empty($_POST['magassag']) || (strlen($_POST['magassag']) < 250 && strlen($_POST['magassag']) > 50)) {
				echo "magassag: ".$_POST['magassag']." Hibás!<br>";
		  	$helyes = false;
			} else {
						echo "magassag: ".$_POST['magassag']. " Helyes!<br>";
		        $helyes = true;
			}

		  if($helyes) {
		      include("/includes/of_regisztracio.php");
			} else {
					echo "<h1>Hibás adatok, nincs örökbefogadás!</h1>";
			}

		?>