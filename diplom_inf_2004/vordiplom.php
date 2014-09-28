<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Vordiplomsnote", "Für PO 2004 Diplom Informatik, TU Dresden");

$module = array(
	"mathe"	=> array(21, "", "Mathematik*"), 
	"gti"	=> array( 8, "", "Grundlagen der Technischen Informatik"),
	"ra"	=> array( 8, "", "Rechnerarchitektur*"),  
	"soi"	=> array( 4, "", "Systemorientierte Informatik"),  
	"aud"	=> array(10, "", "Algorithmen, Datenstrukturen und Programmierung*"),  
	"swt"	=> array( 5, "", "Softwaretechnologie"),  
	"bsdbrn"=> array(16, "", "Praktische Informatik (Betriebssysteme, Datenbanken, Rechnernetze)*"),  
	"logik"	=> array( 8, "", "Logik"),  
	"gthi"	=> array( 8, "", "Grundlagen der Theoretischen Informatik"),  
	"ikt"	=> array( 4, "", "Informations- und Kodierungstheorie"),  
	"nf"	=> array( 8, "", "Nebenfach"),  
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>

<tr>
	<td>Praktikum Programmierung</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Hardware-Praktikum</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Praktikum Softwaretechnologie</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Proseminar</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td colspan="2">* = Gebildet aus dem nach der ersten Kommastelle abgeschnittenen arithmetischen Mittel der Einzelleistungen.</td>
</tr>
<?php echo load_footer(); ?>
