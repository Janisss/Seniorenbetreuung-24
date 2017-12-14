<?php
if(isset($_POST['submit'])) {
	$emailbody =  
	 'Anrede: '.$_POST['anrede']."\n"
	.'Name: '.$_POST['name']."\n"
	.'Vorname: '.$_POST['vorname']."\n"
	.'Email: '.$_POST['email']."\n"
	.'Telefon: '.$_POST['tel']."\n"
	.'PLZ und Ort des Arbeitseinsatzes: '.$_POST['adress']."\n"
	.'Anzahl der zu betreuenden Personen: '.$_POST['anzahl']."\n"
	.'Alter der zu betreuenden Personen: '.$_POST['alter']."\n"
	.'Krankheiten und Gebrechen: '.$_POST['krankheiten']."\n"
	.'Sonstige Bemergunken: '.$_POST['sonstige']."\n";
	
	mail('info@seniorenbetreuung-24.ch', '-> SeniorenBetreuung24 ANGEBOTSANFRAGE', $emailbody);
	header("Location:./danke.html");

}
?>