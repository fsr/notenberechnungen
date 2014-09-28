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

?>
