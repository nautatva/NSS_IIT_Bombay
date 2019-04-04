<?php // compress and merge CSS files
header('Content-type: text/css');
ob_start("compress");

function compress($buffer) {
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
	return $buffer;
}

include('./css/card.css');
include('./css/flip.css');
include('./css/main.css');
include('./css/mega-style.css');
include('./css/navbar.css');
include('./css/stats.css');
include('./css/theme.css');

ob_end_flush();
?>