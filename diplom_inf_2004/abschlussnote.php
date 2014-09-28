<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2004 Diplom Informatik, TU Dresden");

$module = array(
	"fp1"	=> array(1, "", "Fachprüfung Informatik I*"), 
	"fp2"	=> array(1, "", "Fachprüfung Informatik II*"),
	"vert"	=> array(1, "", "Vertiefung"),  
	"nf"	=> array(1, "", "Nebenfach"),  
	"diplom"=> array(2, "", "Diplomarbeit"),  
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>
<tr>
	<td>Komplexpraktikum</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Praktikum</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Hauptseminar</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Großer Beleg</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Allgemeine Kompetenz (4 SWS)</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Fremdsprachenausbildung (4 SWS)</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>studium generale (4 SWS)</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td colspan="2">* = Gebildet aus dem nach der ersten Kommastelle abgeschnittenen arithmetischen Mittel der Einzelleistungen.</td>
</tr>
<?php echo load_footer(); ?>
