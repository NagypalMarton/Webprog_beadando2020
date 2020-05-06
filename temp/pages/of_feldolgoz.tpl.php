<?php
			//szerver oldali ellenőrzés példa
			if (!isset($_POST['orokbefogado_neve']) || empty($_POST['orokbefogado_neve']) || strlen($_POST['orokbefogado_neve']) < 4 || strlen($_POST['orokbefogado_neve']) > 50) {
				echo "Örökbefogadó neve: ".$_POST['orokbefogado_neve']. " Hibás!<br>";
		    $helyes = false;
			} else {
						echo "Örökbefogadó neve: ".$_POST['orokbefogado_neve']. " Helyes!<br>";
						$helyes = true;
			}
		
			if (!isset($_POST['orokbefogado_telefonszama']) || empty($_POST['orokbefogado_telefonszama']) || strlen($_POST['orokbefogado_telefonszama']) !=11){
				echo "Örökbefogadó telefonszáma: ".$_POST['orokbefogado_telefonszama']. " Hibás!<br>";
		    	$helyes = false;
			} else {
						echo "Örökbefogadó telefonszáma: ".$_POST['orokbefogado_telefonszama']. " Helyes!<br>";
						$helyes = true;
			}
			
			if (!isset($_POST['orokbefogado_cime']) || empty($_POST['orokbefogado_cime']) || strlen($_POST['orokbefogado_cime']) < 250 || strlen($_POST['orokbefogado_cime']) > 50) {
				echo "Örökbefogadó címe: ".$_POST['orokbefogado_cime']." Hibás!<br>";
		  		$helyes = false;
			} else {
						echo "Örökbefogadó címe: ".$_POST['orokbefogado_cime']. " Helyes!<br>";
		        $helyes = true;
			}

		  if($helyes)
			 {
		     	 include("?oldal=of_regisztracio");
			} else 
			{
				echo "<h1>Hibás adatok, nincs örökbefogadás!</h1>";
			}

		?>