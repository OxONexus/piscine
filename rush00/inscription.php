<?php session_start(); ?>

<!-- On charge le CSS sur cette page -->
<link rel="stylesheet" href="../css/master.css" charset="utf-8">

<?php
$_SESSION['user'] = "";

if ($_POST['submit'] === "Connexion") {
	if (isset($_POST['admlog']) && isset($_POST['admpwd']) && !empty($_POST['admlog']) && !empty($_POST['admpwd']))
	{
		if ($_POST['admlog'] === $admlogin && $_POST['admpwd'] === $admpasswd) {
			$_SESSION['admin'] = $_POST['admlog'];
			header('Location: ../includes/admin.php');
		}
		elseif ($_POST['admlog'] !== $admlogin) {
			echo "<div class=\"box-alert\">Désolé, ce n'est pas le bon login</div>";
		}
		elseif ($_POST['admpwd'] !== $admpasswd) {
			echo "<div class=\"box-alert\">Désolé, ce n'est pas le bon mot de passe</div>";
		}
	} else {
		echo "<div class=\"box-alert\">Veuillez remplir tous les champs</div>";
	}
}
 ?>

<link rel="stylesheet" href="../css/master.css" media="screen" title="no title" charset="utf-8">

<div class="login-form">
	<h1>Inscription</h1>
	<form action="" method="POST">
		<p>Veuillez entrer votre login :<input type="text" name="usrlog" value=""></p>
		<p>Veuillez entrer votre prénom :<input type="text" name="usrprenom" value=""></p>
		<p>Veuillez entrer votre nom :<input type="text" name="usrnom" value=""></p>
		<p>Veuillez entrer votre adresse :<input type="text" name="usraddress" value=""></p>
		<p>Veuillez entrer votre téléphone :<input type="text" name="usrtel" value=""></p>
		<p>Veuillez entrer votre mail :<input type="text" name="usrmail" value=""></p>
		<p>Veuillez entrer votre mot de passe :<input type="password" name="usrpwd" value=""></p>
		<input type="submit" name="submit" value="S'inscire">
	</form>
</div>
