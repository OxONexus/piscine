#!/usr/bin/php
<?PHP
	while (1)
	{
		print("Entrez un nombre: ");
		$str = fgets(STDIN);
		if (feof(STDIN))
			break;
		$str = trim($str);
		if (is_numeric($str))
		{
			$str = intval($str);
			if (!($str % 2))
				print("Le chiffre $str est Pair\n");
			else
			{
				print("Le chiffre $str est Impair\n");
			}
		}
		else
		{
			print("$str n'est pas un chiffre\n");
		}
	}
?>
