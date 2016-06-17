#!/usr/bin/php
<?php
if ($argc == 2)
{
	if ($argv[1] == "mais pourquoi cette demo ?")
	{
		print("Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n");
		exit;
	}
	else if ($argv[1] ==  "mais pourquoi cette chanson ?")
	{
		print("Parce que Kwame a des enfants\n");
		exit;
	}
	$r = rand(0, 1);
	if ($argv[1] == "vraiment ?" && $r == 1)
	{
		print("Nan c'est parce que c'est le premier avril\n");
		exit;
	}
	else if ($argv[1] == "vraiment ?")
	{
		print("Oui il a vraiment des enfants\n");
		exit;
	}
}
 ?>
