#!/usr/bin/php
<?php
function ft_split($str)
{
	return explode(" ", $str);
}
if ($argc != 1)
{
	$listalpha;
	$listnum;
	$listautre;
	$list;
	$index = 0;
	foreach($argv as $arg)
	{
		if ($arg != $argv[0])
		{
			$str = $arg;
			$array = explode(" ", $str);
			foreach($array as $value)
			{
				if(!empty($value))
				{
					$trimed = trim($value);
					$list[$index] = $trimed;
					$index++;
				}
			}
		}
	}
	foreach ($list as $o)
	{
		if (is_numeric($o[0]))
			$listnum[] = $o;
		else if (ctype_alpha($o[0]))
			$listalpha[] = $o;
		else
			$listautre[] = $o;
	}
	if ($listalpha)
	{
		natcasesort($listalpha);
		foreach ($listalpha as $i)
			print($i . "\n");
	}
	if ($listnum)
	{
		sort($listnum, SORT_STRING);
		foreach ($listnum as $i)
			print($i . "\n");
	}
	if ($listautre)
	{
		sort($listautre);
		foreach ($listautre as $i)
			print($i . "\n");
	}
}
?>
