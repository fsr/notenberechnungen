<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für PO 2010 Master Medieninformatik, TU Dresden");

$bruecke = str_replace(",",".",$_GET['bruecke']);
$vert = str_replace(",",".",$_GET['vert']);
$ergaenzung = str_replace(",",".",$_GET['ergaenzung']);
$aqua2 = str_replace(",",".",$_GET['aqua2']);
$master = str_replace(",",".",$_GET['master']);

$arr = array($bruecke,
		$vert,
		$ergaenzung,
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
	
	$n_bruecke = $bruecke*12;
	$n_vert = $vert*60;
	$n_ergaenzung = $ergaenzung*12;
	$n_aqua2 = $aqua2*6;
	$n_master = $master*30*2;
	
	$sum = $n_bruecke+
		$n_ergaenzung+
		$n_vert+
		$n_aqua2+
		$n_master;

	$note = $sum/150;	

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
	<td>Brückenmodul</td>
	<td><input type="text" name="bruecke" value="<?php echo htmlspecialchars ($bruecke); ?>" required></td>
</tr>
<tr>
	<td>Vertiefungsmodule</td>
	<td><input type="text" name="vert" value="<?php echo htmlspecialchars ($vert); ?>" required></td>
</tr>
<tr>
	<td>Ergänzungsmodule</td>
	<td><input type="text" name="ergaenzung" value="<?php echo htmlspecialchars ($ergaenzung); ?>" required></td>
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
