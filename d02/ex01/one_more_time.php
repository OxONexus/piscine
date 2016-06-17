#!/usr/bin/php
<?PHP
	function verify_day($day)
	{
		if (!	(preg_match("#^([Ll])undi$#", $day) ||
				preg_match("#^([Mm])ardi$#", $day)||
				preg_match("#^([Mm])ercredi$#", $day)||
				preg_match("#^([jJ])eudi$#", $day)||
				preg_match("#^([Vv])endredi$#", $day)||
				preg_match("#^([Ss])amedi$#", $day)||
				preg_match("#^([Dd])imanche$#", $day)
		))
		{
		return -1;
		}
	}
		function verify_months($day)
	{
		if (preg_match("#^([Jj])anvier$#", $day))
			return (0);
		else if(preg_match("#^([Ff])evrier$#", $day))
			return (1);
		else if(preg_match("#^([Mm])ars$#", $day))
			return (2);
		else if(preg_match("#^([Aa])vril$#", $day))
			return (3);
		else if(preg_match("#^([Mm])ai$#", $day))
			return (4);
		else if(preg_match("#^([Jj])uin$#", $day))
			return (5);
		else if(preg_match("#^([Jj])uillet$#", $day))
			return (6);
		else if(preg_match("#^([Aa])out$#", $day))
			return (7);
		else if(preg_match("#^([Ss])eptembre$#", $day))
			return (8);
		else if(preg_match("#^([Oo])ctobre$#", $day))
			return (9);
		else if(preg_match("#^([Nn])ovembre$#", $day))
			return (10);
		else if(preg_match("#^([Dd])ecembre$#", $day))
			return (11);
		else
			return -1;
	}
	function format_error()
	{
		print("Wrong Format\n");
		exit(0);
	}

	if ($argc == 2)
	{
		$tab = explode(" ",trim($argv[1]));
		if ((count($tab) != 5) || (verify_day($tab[0]) == -1) || (verify_months($tab[2]) == -1) || 
			!is_numeric($tab[1]))
			format_error();
		$tab_heure = explode(":",$tab[4]);
		if (count($tab_heure) != 3 || !is_numeric($tab[3]) || !is_numeric($tab_heure[0]) || !is_numeric($tab_heure[1]) || !is_numeric($tab_heure[2]))
			format_error();
		$heure = intval($tab_heure[0]);
		$minute= intval($tab_heure[1]);
		$seconde = intval($tab_heure[2]);
		$nb_day = intval($tab[1]);
		$anne = intval($tab[3]);
		$mois = verify_months($tab[2]);
		if ($nb_day > 31 || $heure > 24 || $minute > 60 || $seconde > 60 || $anne < 1970)
			format_error();
		date_default_timezone_set(UTC);
		$timestamp = mktime($heure, $minute, $seconde, $mois + 1, $nb_day, $anne, 1);
		print("$timestamp\n");
	}
?>
