<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2010 Master Informatik, TU Dresden");

$bas1 = str_replace(",",".",$_GET['bas1']);
$bas2 = str_replace(",",".",$_GET['bas2']);
$bas3 = str_replace(",",".",$_GET['bas3']);
$vert = str_replace(",",".",$_GET['vert']);
$profil = str_replace(",",".",$_GET['profil']);
$praktikum = str_replace(",",".",$_GET['praktikum']);
$aqua2 = str_replace(",",".",$_GET['aqua2']);
$master = str_replace(",",".",$_GET['master']);

$arr = array(	$bas1, 
		$bas2, 
		$bas3,
		$vert,
		$profil,
		$praktikum,
		$aqua2,
		$master);

$missing = "false";
$five = "false";
$no_grade = "false";
foreach ($arr as &$value) {
	if($value==""){
		$missing = "true";
	} elseif(!is_numeric($value) || $value<1){
		$no_grade = "true";
	}
	if($value>4){
		$five = "true";
	}
}


if(($missing=="false") AND ($five=="false") AND ($no_grade == "false")){
	
	$n_bas1 = $bas1*12; 
	$n_bas2 = $bas2*12; 
	$n_bas3 =$bas3*12;
	$n_vert =$vert*15;
	$n_profil = $profil*12;
	$n_praktikum = $praktikum*12;
	$n_aqua2 = $aqua2*6;
	$n_master = $master*30*2;
	
	
	$sum = $n_bas1+
		$n_bas2+
		$n_bas3+
		$n_vert+
		$n_profil+
		$n_praktikum+
		$n_aqua2+
		$n_master;

	$note = $sum/141;	

	$note = floor($note*10);
	
	echo "<hr><font color='#008000'><b>Note: ";
	printf("%1\$.1f",$note/10);
	echo "</b></font><br><hr><br>";
} 
if($five=="true"){
	echo "<hr><font color='#800000'><b>Keine Berechnung möglich bei nicht bestandenen Prüfungen (mit > 4.0)</b></font><br><hr><br>";
	
}

if($no_grade == "true"){
	echo "<hr><font color='#800000'><b>Bitte nur Zahlen zwischen 1 und 4 in die Felder eintragen.</b></font><br><hr><br>";
}
?>
 
<form action="abschlussnote.php" method="get" >

<!-- Ich weiß, man nutzt keine tables mehr für Layout, aber... -->

<table border="0">
<tr>
	<td>Basismodul 1</td>
	<td><input type="text" name="bas1" value="<?php echo htmlspecialchars ($bas1); ?>" required></td>
</tr>
<tr>
	<td>Basismodul 2</td>
	<td><input type="text" name="bas2" value="<?php echo htmlspecialchars ($bas2); ?>" required></td>
</tr>
<tr>
	<td>Basismodul 3</td>
	<td><input type="text" name="bas3" value="<?php echo htmlspecialchars ($bas3); ?>" required></td>
</tr>
<tr>
	<td>Vertiefungsmodul</td>
	<td><input type="text" name="vert" value="<?php echo htmlspecialchars ($vert); ?>" required></td>
</tr>
<tr>
	<td>Profilmodul 1</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Profilmodul 2</td>
	<td><input type="text" name="profil" value="<?php echo htmlspecialchars ($profil); ?>" required></td>
</tr>
<tr>
	<td>Vertieftes Master-Praktikum</td>
	<td><input type="text" name="praktikum" value="<?php echo htmlspecialchars ($praktikum); ?>" required></td>
</tr>
<tr>
	<td>Allgemeine Qualifikation</td>
	<td><input type="text" name="aqua2" value="<?php echo htmlspecialchars ($aqua2); ?>" required></td>
</tr>
<tr>
	<td>Master-Arbeit + Verteidigung</td>
	<td><input type="text" name="master" value="<?php echo htmlspecialchars ($master); ?>" required></td>
</tr>
<tr>
	<td>&#160;</td>
	<td>&#160;</td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="Note berechnen" /></td>
</tr>
</table>
 
</form>

<?php echo load_footer(); ?>
