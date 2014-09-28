<?php

function load_header($title, $description) {
	$header = file_get_contents("../ressourcen/header.txt");
	$header = str_replace("[[text:Titel]]", $title, $header);
	$header = str_replace("[[text:Beschreibung]]", $description, $header);
	return $header;
}

function load_footer() {
	return file_get_contents("../ressourcen/footer.txt");
}

function calculate($data, &$module) {
	$missing = false;
	$five = false;
	$no_grade = false;
	foreach ($module as $key => $value) {
		 $val = str_replace(",",".",$data[$key]);
		 if($val=="") {
		 	$missing = true;
		 } elseif(!is_numeric($val) || $val<1) {
		 	$no_grade = true;
		 }
		 if($val>4) {
		 	$five = true;
		 }
		 $module[$key][1] = $val;
	}

	if(!$missing && !$five && !$no_grade){
		$sum = 0;
		$credits = 0;
		foreach ($module as $key => $value) {
			$sum += $value[0]*$value[1];
			$credits += $value[0];
		}
		
		$note = $sum/$credits;	
		$note = floor($note*10);
		
		echo "<hr><div class='result'>Note: ";
		printf("%1\$.1f",$note/10);
		echo "</div><hr><br>";

	} 
	if($five){
		echo "<hr><div class='warning'>Keine Berechnung möglich bei nicht bestandenen Prüfungen (mit > 4.0)</div><hr><br>";
	}

	if($no_grade){
		echo "<hr><div class='warning'><b>Bitte nur Zahlen zwischen 1 und 4 in die Felder eintragen.</div><hr><br>";
	}
}

function show_modules($module) {
	foreach ($module as $key => $value) {
		echo "<tr>
		<td><label for=\"$key\">$value[2]</label></td>
		<td><input type=\"text\" id=\"$key\" name=\"$key\" value=\"".htmlspecialchars($value[1])."\" required></td>\n</tr>\n";
	}
}

function show_table_head() {
	 echo '<form action="abschlussnote.php" method="get">
	 <table>';
}

?>
