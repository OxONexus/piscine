#!/usr/bin/php
<?PHP
	if ($argc == 2)
	{
		$file = file_get_contents($argv[1]);
		$size_file = strlen($file);
		$count = 0;
		$a = 0;
		$ina = 0;
		$di = 0;
		$beet = 0;
		while ($count < $size_file)
		{
			if ($file[$count] == "\"")
				$di ^= 1;
			if ($file[$count] == "<")
			{
				$beet = 1;
				$a = 0;
			}
			else if ($file[$count] == ">")
				$beet = 0;
			if ($file[$count] == "<")
			{
				$count++;
				while ($file[$count] == " ")
					$count++;
				if ($file[$count] == "a")
					$a = 1;
				else if ($file[$count] == "/" && $file[$count + 1] == 'a')
				{
					$a = 0;
					$ina = 0;
				}
			}
			if ($a == 1 && $file[$count] == ">")
			{
				$a = 0;
				$ina = 1;
			}
			if ($file[$count] == '>' && $a == 1)
				$ina = 1;
		if ((($a == 1 || $ina == 1) && $di == 1) || ($ina == 1 && $a == 0 && $beet == 0))
			$file[$count] = strtoupper($file[$count]);
		$count++;
		}
		print($file);
	}
?>
