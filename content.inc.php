<?php
	// Return the correct content for the page which included this file.
	require_once( basename( str_replace(".php", ".content.php", $_SERVER['SCRIPT_NAME']) ) );
?>
