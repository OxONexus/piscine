#!/usr/bin/php
<?PHP

	function calc ($str1, $str2, $op)
	{
		$str1 = trim($str1);
		$str2 = trim($str2);
		if (!is_numeric($str1) || !is_numeric($str2))
		{
			print("Syntax Error\n");
			return;
		}
		$val1 = doubleval($str1);
		$val2 = doubleval($str2);
		if ($op == "+")
			print ($val1 + $val2);
		else if ($op == "*")
			print ($val1 * $val2);
		else if ($op == "-")
			print ($val1 - $val2);
		else if ($op == "%")
			print ($val1 % $val2);
		else if ($op == "/")
			print ($val1 / $val2);
		else
			print ("Incorrect Parameters");
		print("\n");
	}
	if ($argc == 2)
	{
		if (strstr($argv[1], "*"))
			calc(strstr($argv[1], "*", TRUE), substr(strstr($argv[1], "*"), 1), "*");
		else if (strstr($argv[1], "%"))
			calc(strstr($argv[1], "%", TRUE), substr(strstr($argv[1], "%"), 1), "%");
		else if (strstr($argv[1], "/"))
			calc(strstr($argv[1], "/", TRUE), substr(strstr($argv[1], "/"), 1), "/");
		else if (strstr($argv[1], "+"))
			calc(strstr($argv[1], "+", TRUE), substr(strstr($argv[1], "+"), 1), "+");
		else if (strstr($argv[1], "-"))
			calc(strstr($argv[1], "-", TRUE), substr(strstr($argv[1], "-"), 1), "-");
		else
			print("Syntax Error\n");
	}
	else
			print ("Incorrect Parameters\n");
?>
