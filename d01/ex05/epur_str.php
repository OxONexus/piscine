#!/usr/bin/php
<?PHP
	if ($argc == 2)
	{
		$end;
		$tab = explode(" ", $argv[1]);
		foreach ($tab as $word)
		{
			$epur = trim($word);
			if ($epur != $argv[0] && $epur != "")
			{
				$end .= $epur;
				$end .= " ";
			}
		}
	}
	print(trim($end));
	print("\n");
?>
