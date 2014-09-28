<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2004 Bakkalaureat Medieninformatik, TU Dresden");

$module = array(
	"fp1"	=> array(1, "", "Fachprüfung Medieninformatik (Fachgebiet 1 und x/y, je 8 SWS)*"), 
	"bakk"	=> array(2, "", "Bakkalaureatsarbeit"),  
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>
<tr>
	<td>Ergänzungsgebiet (4 SWS)</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Komplexpraktikum</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Proseminar</td>
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
	<td colspan="2">* = Gebildet aus dem nach der ersten Kommastelle abgeschnittenen arithmetischen Mittel der Einzelleistungen.</td>
</tr>
<?php echo load_footer(); ?>
