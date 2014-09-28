<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2004 Diplom Medieninformatik, TU Dresden");

$module = array(
	"fp1"	=> array(1, "", "Fachprüfung Medieninformatik I (Fachgebiet 1, 12 SWS)"), 
	"fp2"	=> array(1, "", "Fachprüfung Medieninformatik II*"),
	"vert"	=> array(1, "", "Vertiefung"),
	"nf"	=> array(1, "", "Nebenfach"),
	"diplom"=> array(2, "", "Diplomarbeit"),  
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>
<tr>
	<td>Komplexpraktikum zum FG 1</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Komplexpraktikum zum FG x/y</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Proseminar</td>
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
	<td>Allgemeine Kompetenz (2 SWS)</td>
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
