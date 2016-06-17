#!/usr/bin/php
<?PHP

function get_word($str)
{
	$tab = explode(" ", $str);
	$end = array();
	foreach ($tab as $word)
	{
		$epur = trim($word);
		if ($epur != "")
			array_push($end, $epur);
	}
	return ($end);
}

	if ($argc >= 2)
	{
		$result = array();
		foreach ($argv as $word)
		{
			if ($word != $argv[0])
			{
				$result = array_merge($result, get_word($word));
			}
		}
	sort($result);
	foreach($result as $tt)
		print("$tt\n");
	}
?>
