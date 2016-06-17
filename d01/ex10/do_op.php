#!/usr/bin/php
<?PHP
	if ($argc == 4)
	{
		$val1 = intval(trim($argv[1]));
		$val2 = intval(trim($argv[3]));
		if (trim($argv[2]) == "+")
			print ($val1 + $val2);
		else if (trim($argv[2]) == "*")
			print ($val1 * $val2);
		else if (trim($argv[2]) == "-")
			print ($val1 - $val2);
		else if (trim($argv[2]) == "%")
			print ($val1 % $val2);
		else if (trim($argv[2]) == "/")
			print ($val1 / $val2);
		else
			print ("Incorrect Parameters");
		print("\n");
	}
	else
	{
		print ("Incorrect Parameters\n");
	}
?>
