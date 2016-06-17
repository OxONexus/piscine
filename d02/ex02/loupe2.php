#!/usr/bin/php
<?PHP
	if ($argc == 2)
	{
		$preg_grep = preg_grep("[a-z]", $argv[1]);
		print_r($preg_grep);
	}
?>
