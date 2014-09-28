<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2010 Master Informatik, TU Dresden");

$module = array(
	"bas1"		=> array(12, "", "Basismodul 1"), 
	"bas2"		=> array(12, "", "Basismodul 2"),
	"bas3"		=> array(12, "", "Basismodul 3"),  
	"vert"		=> array(15, "", "Vertiefungsmodul"),  
	"profil"	=> array(12, "", "Profilmodul 2"),  
	"praktikum"	=> array(12, "", "Vertieftes Master-Praktikum"),  
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
