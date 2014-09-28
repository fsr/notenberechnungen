<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Vordiplomsnote", "Für PO 2010 Diplom Informatik, TU Dresden");

$module = array(
	"mathe1"	=> array(12, "", "Einführung in die Mathematik für Informatiker"), 
	"mathe2"	=> array(12, "", "Mathematische Methoden für Informatiker"),
	"aud"		=> array( 5, "", "Algorithmen und Datenstrukturen"),  
	"prog"		=> array( 5, "", "Programmierung"),  
	"lab"		=> array( 4, "", "Einführungs- und Programmierpraktikum"),  
	"swt"		=> array( 5, "", "Softwaretechnologie"),  
	"bus"		=> array( 7, "", "Betriebssysteme und Sicherheit"),  
	"dbrn"		=> array( 9, "", "Datenbanken und Rechnernetze"),  
	"ikt"		=> array( 4, "", "Informations- und Kodierungstheorie"),  
	"fs"		=> array( 8, "", "Formale Systeme"),  
	"logik"		=> array( 8, "", "Theoretische Informatik und Logik"),  
	"is"		=> array( 4, "", "Intelligente Systeme"),  
	"ra"		=> array(10, "", "Rechnerarchitektur"),  
	"tg"		=> array( 9, "", "Technische Grundlagen und Hardwarepraktikum"),  
	"soi"		=> array( 4, "", "Systemorientierte Informatik / Hardware Software-Codesign"),  
	"nf"		=> array( 7, "", "Nebenfach"),  
	"aqua"		=> array( 5, "", "Allgemeine Basisqualifikationen"),  
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>
<tr>
	<td>Softwaretechnologie-Projekt</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<?php echo load_footer(); ?>
