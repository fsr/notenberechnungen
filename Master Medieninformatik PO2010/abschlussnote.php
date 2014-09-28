<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2010 Master Medieninformatik, TU Dresden");

$module = array(
	"bruecke"	=> array(12, "", "Brückenmodul"), 
	"vert"		=> array(60, "", "Vertiefungsmodule"),
	"ergaenzung"=> array(12, "", "Ergänzungsmodule"),  
	"aqua"		=> array( 6, "", "Allgemeine Qualifikation"),  
	"master"	=> array(60, "", "Master-Arbeit und Verteidigung"),  
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>
<tr>
	<td>Profilmodul 1</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<?php echo load_footer(); ?>
