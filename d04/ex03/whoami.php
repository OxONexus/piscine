<?php
	session_start();
	if ($_SESSION['loggued_on_user'] == "")
		print "ERROR\n";
	else
	{
		print ($_SESSION['loggued_on_user']);
		print "\n";
	}
?>
