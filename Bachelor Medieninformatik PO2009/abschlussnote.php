<!DOCTYPE html> 
      <html xmlns='http://www.w3.org/1999/xhtml' lang='de' xml:lang='de'>
        <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title>Berechnung Abschlussnote</title>
	<link rel="stylesheet" type="text/css" href="../resourcen/style.css"> 
        </head>
<body>

<h1>Berechnung der Abschlussnote</h1>
Für PO 2009 Bachelor Medieninformatik, TU Dresden<br>
<br>

<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D

$mathe1 = str_replace(",",".",$_GET['mathe1']);
$mathe2 = str_replace(",",".",$_GET['mathe2']);
$aud = str_replace(",",".",$_GET['aud']);
$prog = str_replace(",",".",$_GET['prog']);
$lab = str_replace(",",".",$_GET['lab']);
$swt = str_replace(",",".",$_GET['swt']);
$bus = str_replace(",",".",$_GET['bus']);
$dbrn = str_replace(",",".",$_GET['dbrn']);
$ikt = str_replace(",",".",$_GET['ikt']);
$fs = str_replace(",",".",$_GET['fs']);
$gdg = str_replace(",",".",$_GET['gdg']);
$emg = str_replace(",",".",$_GET['emg']);
$ra = str_replace(",",".",$_GET['ra']);
$mums = str_replace(",",".",$_GET['mums']);
$medida = str_replace(",",".",$_GET['medida']);
$wme = str_replace(",",".",$_GET['wme']);
$emi = str_replace(",",".",$_GET['emi']);
$ecg = str_replace(",",".",$_GET['ecg']);
$vert1 = str_replace(",",".",$_GET['vert1']);
$vert2 = str_replace(",",".",$_GET['vert2']);
$aqua = str_replace(",",".",$_GET['aqua']);
$bachelor = str_replace(",",".",$_GET['bachelor']);

$arr = array(	$mathe1, 
		$mathe2, 
		$aud,
		$prog,
		$lab,
		$swt,
		$bus,
		$dbrn,
		$ikt,
		$fs,
		$gdg,
		$emg,
		$ra,
		$mums,
		$medida,
		$wme,
		$emi,
		$ecg,
		$vert1,
		$vert2,
		$aqua,
		$bachelor);

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
	
	$n_mathe1 = $mathe1*15;
	$n_mathe2 = $mathe2*15;
	$n_aud = $aud*6;
	$n_prog = $prog*6;
	$n_lab = $lab*4;
	$n_swt = ($swt*6);
	$n_bus = $bus*7;
	$n_dbrn = $dbrn*10;
	$n_ikt = $ikt*5;
	$n_fs = $fs*8;
	$n_gdg = $gdg*4;
	$n_emg = $emg*4;
	$n_ra = $ra*10;
	$n_mums = $mums*5;
	$n_medida = $medida*3;
	$n_wme = $wme*5;
	$n_emi = $emi*5;
	$n_ecg = $ecg*5;
	$n_vert1 = $vert1*12;
	$n_vert2 = $vert2*12;
	$n_aqua = $aqua*5;
	$n_bachelor = $bachelor*13*4;
	
	$sum = $n_mathe1 + 
		$n_mathe2 +
		$n_aud +
		$n_prog +
		$n_lab +
		$n_swt +
		$n_bus +
		$n_dbrn +
		$n_ikt +
		$n_fs +
		$n_gdg +
		$n_emg +
		$n_ra +
		$n_mums +
		$n_emi +
		$n_ecg +
		$n_medida +
		$n_wme +
		$n_vert1 +
		$n_vert2 +
		$n_aqua +
		$n_bachelor;

	$note = $sum/204;	

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
	<td>Einführungspraktikum</td>
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
	<td>Grundlagen der Gestaltung</td>
	<td><input type="text" name="gdg" value="<?php echo htmlspecialchars ($gdg); ?>" required></td>
</tr>
<tr>
	<td>Einführung in die Mediengestaltung</td>
	<td><input type="text" name="emg" value="<?php echo htmlspecialchars ($emg); ?>" required></td>
</tr>
<tr>
	<td>Rechnerarchitektur</td>
	<td><input type="text" name="ra" value="<?php echo htmlspecialchars ($ra); ?>" required></td>
</tr>
<tr>
	<td>Medien- und Medienströme</td>
	<td><input type="text" name="mums" value="<?php echo htmlspecialchars ($mums); ?>" required></td>
</tr>
<tr>
	<td>Einführung in die Medieninformatik</td>
	<td><input type="text" name="emi" value="<?php echo htmlspecialchars ($emi); ?>" required></td>
</tr>
<tr>
	<td>Einführung in die Computergrafik</td>
	<td><input type="text" name="ecg" value="<?php echo htmlspecialchars ($ecg); ?>" required></td>
</tr>
<tr>
	<td>Medienpsychologie und -didaktik</td>
	<td><input type="text" name="medida" value="<?php echo htmlspecialchars ($medida); ?>" required></td>
</tr>
<tr>
	<td>Web- und Multimedia Engineering</td>
	<td><input type="text" name="wme" value="<?php echo htmlspecialchars ($wme); ?>" required></td>
</tr>
<tr>
	<td>Komplexpraktikum</td>
	<td><i>Keine Note.<br> Muss aber bestanden sein.</i></td>
</tr>
<tr>
	<td>Vertiefung</td>
	<td><input type="text" name="vert1" value="<?php echo htmlspecialchars ($vert1); ?>" required></td>
</tr>
<tr>
	<td>Vertiefung zur Bachelor-Arbeit</td>
	<td><input type="text" name="vert2" value="<?php echo htmlspecialchars ($vert2); ?>" required></td>
</tr>
<tr>
	<td>Allgemeine Qualifikationen</td>
	<td><input type="text" name="aqua" value="<?php echo htmlspecialchars ($aqua); ?>" required></td>
</tr>
<tr>
	<td>Bachelor-Arbeit und Kolloquium</td>
	<td><input type="text" name="bachelor" value="<?php echo htmlspecialchars ($bachelor); ?>" required></td>
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

<?php echo file_get_contents("../resourcen/footer.txt");
?>

</body>