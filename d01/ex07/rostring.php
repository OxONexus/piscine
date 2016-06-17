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
		$result = get_word($argv[1]);
		$output = array_slice($result, 1);
		$printed;
		array_push($output, $result[0]);
		foreach($output as $tt)
		{
			$printed .= $tt." ";
		}
			print(trim($printed));
			print("\n");
	}
?>
