<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2009 Bachelor Medieninformatik, TU Dresden");

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
	"gdg"		=> array( 4, "", "Grundlagen der Gestaltung"),  
	"emg"		=> array( 4, "", "Einführung in die Mediengestaltung"),  
	"ra"		=> array(10, "", "Rechnerarchitektur"),  
	"mums"		=> array( 5, "", "Medien und Medienströme"),  
	"emi"		=> array( 5, "", "Einführung in die Medieninformatik"),  
	"ecg"		=> array( 5, "", "Einführung in die Computergrafik"),  
	"medida"	=> array( 3, "", "Medienpsychologie und -didaktik"),  
	"wme"		=> array( 5, "", "Web- und Multimedia Engineering"),  
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
<tr>
	<td>Komplexpraktikum</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<?php echo load_footer(); ?>
