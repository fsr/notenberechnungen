<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Vordiplomsnote", "Für PO 2004 Diplom Medieninformatik, TU Dresden");

$module = array(
	"mathe"	=> array(25, "", "Mathematik*"), 
	"ra"	=> array( 7, "", "Rechnerarchitektur und Organisation*"),  
	"aud"	=> array(10, "", "Algorithmen, Datenstrukturen und Programmierung*"),  
	"swt"	=> array( 5, "", "Softwaretechnologie"),  
	"bsdbrn"=> array(17, "", "Praktische Informatik (Betriebssysteme, Datenbanken, Rechnernetze)*"),
	"emi"	=> array( 4, "", "Einführung Medieninformatik"),
	"emg"	=> array( 4, "", "Einführung Mediengestaltung"),
	"mums"	=> array( 5, "", "Medien und Medienströme"),  
	"logik"	=> array( 5, "", "Logik"),  
	"gthi"	=> array( 7, "", "Grundlagen der Theoretischen Informatik"),  
	"ikt"	=> array( 4, "", "Informations- und Kodierungstheorie"),  
	"nf"	=> array( 7, "", "Nebenfach"),  
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>

<tr>
	<td>Mathematik I</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Grundlagen der Gestaltung</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Medienpsychologie und Mediendidaktik</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Praktikum Programmierung</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Praktikum Softwaretechnologie</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Praktikum Medieninformatik</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td colspan="2">* = Gebildet aus dem nach der ersten Kommastelle abgeschnittenen arithmetischen Mittel der Einzelleistungen.</td>
</tr>
<?php echo load_footer(); ?>
