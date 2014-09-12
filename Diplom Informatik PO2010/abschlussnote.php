<!DOCTYPE html> 
      <html xmlns='http://www.w3.org/1999/xhtml' lang='de' xml:lang='de'>
        <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title>Berechnung Abschlussnote</title>
        </head>
<body>

<h1>Berechnung der Abschlussnote</h1>
Für PO 2010 Diplom Informatik, TU Dresden<br>
<br>

<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D

$bas1 = str_replace(",",".",$_GET['bas1']);
$bas2 = str_replace(",",".",$_GET['bas2']);
$bas3 = str_replace(",",".",$_GET['bas3']);
$vert = str_replace(",",".",$_GET['vert']);
$profil = str_replace(",",".",$_GET['profil']);
$beleg = str_replace(",",".",$_GET['beleg']);
$aqua2 = str_replace(",",".",$_GET['aqua2']);
$vnf = str_replace(",",".",$_GET['vnf']);
$diplom = str_replace(",",".",$_GET['diplom']);

$arr = array(	$bas1, 
		$bas2, 
		$bas3,
		$vert,
		$profil,
		$beleg,
		$aqua2,
		$vnf,
		$diplom);

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
	$n_beleg = $beleg*9;
	$n_aqua2 = $aqua2*5;
	$n_vnf = $vnf*15;
	$n_diplom = $diplom*30*2;
	
	
	$sum = $n_bas1+
		$n_bas2+
		$n_bas3+
		$n_vert+
		$n_profil+
		$n_beleg+
		$n_aqua2+
		$n_vnf+
		$n_diplom;

	$note = $sum/152;	

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
	<td>Forschungslinie</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
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
	<td>Berufspraktikum</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
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
	<td>Großer Beleg</td>
	<td><input type="text" name="beleg" value="<?php echo htmlspecialchars ($beleg); ?>" required></td>
</tr>
<tr>
	<td>Analyse eines Forschungsthemas</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Berufsspezifische Schlüsselkompetenzen</td>
	<td><input type="text" name="aqua2" value="<?php echo htmlspecialchars ($aqua2); ?>" required></td>
</tr>
<tr>
	<td>Vertiefung im Nebenfach</td>
	<td><input type="text" name="vnf" value="<?php echo htmlspecialchars ($vnf); ?>" required></td>
</tr>
<tr>
	<td>Diplomarbeit und Verteidigung</td>
	<td><input type="text" name="diplom" value="<?php echo htmlspecialchars ($diplom); ?>" required></td>
</tr>
</table>
 

<p>
<input type="submit" value="Berechnen" />
</p>
 
</form>

<hr>
by Sascha<br> <a href="https://github.com/fsr/notenberechnungen"><i>Stand: Beta vom 12.09.2014</i></a>, keine Gewähr (oder so)<br>
</body>