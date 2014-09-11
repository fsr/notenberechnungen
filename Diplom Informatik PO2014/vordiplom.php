<!DOCTYPE html> 
      <html xmlns='http://www.w3.org/1999/xhtml' lang='de' xml:lang='de'>
        <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title>Berechnung Vordiplom</title>
        </head>
<body>

<h1>Berechnung der Vordiplomnote</h1>
Für PO 2010 Diplom Informatik, TU Dresden<br>
<br>

<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D

$params = array('mathe1', 'mathe2', 'aud', 'prog', 'lab', 'swt', 'bus', 'dbrn', 'ikt', 'fs', 'logik', 'is', 'ra', 'tg', 'soi', 'nf', 'aqua');

foreach($params as $f) {
	$$f = str_replace(",",".",$_GET[$f]);
	$arr[] = $$f;
}

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
	
	$n_mathe1 = $mathe1*12;
	$n_mathe2 = $mathe2*12;
	$n_aud = $aud*5;
	$n_prog = $prog*5;
	$n_lab = $lab*4;
	$n_swt = ($swt*5);
	$n_bus = $bus*7;
	$n_dbrn = $dbrn*9;
	$n_ikt = $ikt*4;
	$n_fs = $fs*8;
	$n_logik = $logik*8;
	$n_is = $is*4;
	$n_ra = $ra*10;
	$n_tg = $tg*9;
	$n_soi = $soi*4;
	$n_nf = $nf*7;
	$n_aqua = $aqua*5;
	
	$sum = 0;
	foreach ($params as $f) {
		$nname = "n_" + $f;
		$sum += $$nname;
	}
	
	$note = $sum/118;	

	//$note = (floor($note*10))/10;
	
	echo "<hr><font color='#008000'><b>Note: ";
	printf("%1\$.1f",$note);
	echo "</b></font><br><hr><br>";
} 
if($five=="true"){
	echo "<hr><font color='#800000'><b>Keine Berechnung möglich bei nicht bestandenen Prüfungen (mit > 4.0)</b></font><br><hr><br>";
	
}

if($no_grade == "true"){
	echo "<hr><font color='#800000'><b>Bitte nur Zahlen zwischen 1 und 4 in die Felder eintragen.</b></font><br><hr><br>";
}
?>
 
<form action="vordiplom.php" method="get" >

<!-- Ich weiß, man nutzt keine tables mehr für Layout, aber... -->

<table border="0">
<tr>
	<td>Einführung in die Mathematik für Informatiker:</td>
	<td><input type="text" name="mathe1" value="<?php echo htmlspecialchars ($mathe1); ?>" required></td>
</tr>
<tr>
	<td>Mathematische Methoden für Informatiker</td>
	<td><input type="text" name="mathe2" value="<?php echo htmlspecialchars ($mathe2); ?>" required></td>
</tr>
<tr>
	<td>Algorithmen und Datenstrukturen</td>
	<td><input type="text" name="aud" value="<?php echo htmlspecialchars ($aud); ?>" required></td>
</tr>
<tr>
	<td>Programmierung</td>
	<td><input type="text" name="prog" value="<?php echo htmlspecialchars ($prog); ?>" required></td>
</tr>
<tr>
	<td>Einführungs- und Programmierpraktikum</td>
	<td><input type="text" name="lab" value="<?php echo htmlspecialchars ($lab); ?>" required></td>
</tr>
<tr>
	<td>Softwaretechnologie</td>
	<td><input type="text" name="swt" value="<?php echo htmlspecialchars ($swt); ?>" required></td>
</tr>
<tr>
	<td>Softwaretechnologie-Projekt</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Betriebssysteme und Sicherheit</td>
	<td><input type="text" name="bus" value="<?php echo htmlspecialchars ($bus); ?>" required></td>
</tr>
<tr>
	<td>Datenbanken und Rechnernetze</td>
	<td><input type="text" name="dbrn" value="<?php echo htmlspecialchars ($dbrn); ?>" required></td>
</tr>
<tr>
	<td>Informations- und Kodierungstheorie</td>
	<td><input type="text" name="ikt" value="<?php echo htmlspecialchars ($ikt); ?>" required></td>
</tr>
<tr>
	<td>Formale Systeme</td>
	<td><input type="text" name="fs" value="<?php echo htmlspecialchars ($fs); ?>" required></td>
</tr>
<tr>
	<td>Theoretische Informatik und Logik</td>
	<td><input type="text" name="logik" value="<?php echo htmlspecialchars ($logik); ?>" required></td>
</tr>
<tr>
	<td>Intelligente Systeme</td>
	<td><input type="text" name="is" value="<?php echo htmlspecialchars ($is); ?>" required></td>
</tr>
<tr>
	<td>Rechnerarchitektur</td>
	<td><input type="text" name="ra" value="<?php echo htmlspecialchars ($ra); ?>" required></td>
</tr>
<tr>
	<td>Technische Grundlagen und Hardwarepraktikum</td>
	<td><input type="text" name="tg" value="<?php echo htmlspecialchars ($tg); ?>" required></td>
</tr>
<tr>
	<td>Systemorientierte Informatik / Hardware Software-Codesign</td>
	<td><input type="text" name="soi" value="<?php echo htmlspecialchars ($soi); ?>" required></td>
</tr>
<tr>
	<td>Nebenfach</td>
	<td><input type="text" name="nf" value="<?php echo htmlspecialchars ($nf); ?>" required></td>
</tr>
<tr>
	<td>Allgemeine Basisqualifikationen</td>
	<td><input type="text" name="aqua" value="<?php echo htmlspecialchars ($aqua); ?>" required></td>
</tr>
</table>
 

<p>
<input type="submit" value="Berechnen" />
</p>
 
</form>

<hr>
by Sascha<br> <i>Stand: Beta vom 10.09.2014</i>, keine Gewähr (oder so)

</body>
