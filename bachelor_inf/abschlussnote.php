<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2009 Bachelor Informatik, TU Dresden");

$module = array(
	"mathe1"	=> array(15, "", "Einführung in die Mathematik für Informatiker"), 
	"mathe2"	=> array(15, "", "Mathematische Methoden für Informatiker"),
	"aud"		=> array( 6, "", "Algorithmen und Datenstrukturen"),  
	"prog"		=> array( 6, "", "Programmierung"),  
	"lab"		=> array( 4, "", "Einführungspraktikum"),  
	"swt"		=> array( 6, "", "Softwaretechnologie"),  
	"bus"		=> array( 7, "", "Betriebssysteme und Sicherheit"),  
	"dbrn"		=> array(10, "", "Datenbanken und Rechnernetze"),  
	"ikt"		=> array( 5, "", "Informations- und Kodierungstheorie"),  
	"fs"		=> array( 8, "", "Formale Systeme"),  
	"logik"		=> array( 9, "", "Theoretische Informatik und Logik"),  
	"is"		=> array( 5, "", "Intelligente Systeme"),  
	"ra"		=> array(10, "", "Rechnerarchitektur"),  
	"tg"		=> array(10, "", "Technische Grundlagen und Hardwarepraktikum"),  
	"soi"		=> array( 6, "", "Systemorientierte Informatik / Hardware Software-Codesign"),  
	"emi"		=> array( 5, "", "Einführung in die Medieninformatik"),  
	"ecg"		=> array( 5, "", "Einführung in die Computergrafik"),  
	"vert1"		=> array(12, "", "Vertiefung"),  
	"vert2"		=> array(12, "", "Vertiefung zur Bachelor-Arbeit"),  
	"aqua"		=> array( 5, "", "Allgemeine Qualifikationen"),  
	"bachelor"	=> array(52, "", "Bachelor-Arbeit und Kolloquium"),
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
