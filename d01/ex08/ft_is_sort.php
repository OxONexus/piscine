#!/usr/bin/php
<?PHP
function len_array($array)
{
	$count = 0;
	foreach($array as $tt)
		++$count;
	return $count;
}
function ft_is_sort($str)
{
	$comp = array_merge($str);
	$count = -1;
	$len = len_array($str);
	sort($comp);
	while (++$count < $len)
	{
		if ($str[$count] != $comp[$count])
			return (0);
	}
	return 1;
}
?>
