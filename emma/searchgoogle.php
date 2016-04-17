<?php
	// source: http://www.hashbangcode.com/blog/using-jquery-load-content-page-without-iframe
	$url = 'http://www.google.com/search?hl=en&q=';
	$postVariable = 'string';
	if (isset($_POST['string'])) {
		$output = file_get_contents($url . urlencode($_POST[$postVariable]));
		$output = preg_replace('#<script.*</script>#ismU', '', $output);
		$output = preg_replace('#<style.*</style>#ismU', '', $output);
		echo $output;	
	}
?>