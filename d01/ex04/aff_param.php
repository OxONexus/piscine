#!/usr/bin/php
<?PHP
	foreach ($argv as $word)
	{
		if ($word != $argv[0])
			print("$word\n");
	}
?>
