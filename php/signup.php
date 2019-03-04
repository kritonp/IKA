<?php
	header("content-type: text/html;charset=utf-8");

	$onoma = $_POST["onoma"];
	$epwnumo = $_POST["epwnumo"];
	$onoma_patros = $_POST["onoma_patros"];
	$dieuthunsh = $_POST["dieuthunsh"];
	$polh_katoikias = $_POST["polh_katoikias"];
	$birthdate = $_POST["birthdate"];
	$amka = $_POST["amka"];
	$arithmos_thlefwnou =  $_POST["arithmos_thlefwnou"];
	$email =  $_POST["email"];
	$password =  $_POST["password"];
	$kathgoria_eggrafhs = $_POST["kathgoria_eggrafhs"];

	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "ika_db");
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}


	if ( $kathgoria_eggrafhs == 'Ασφαλισμένος' ) {
		$sql = "INSERT INTO asfalismenoi (amka, onoma, epwnumo, onoma_patros, birth_date, dieuthunsh, password, polh_katoikias, arithmos_thlefwnou, email)
		VALUES ('$amka', N'$onoma', N'$epwnumo', N'$onoma_patros', '$birthdate', N'$dieuthunsh', '$password', N'$polh_katoikias', '$arithmos_thlefwnou', '$email')";

		if ($conn->query($sql) === TRUE) {
			session_start();
			$_SESSION["usr"] = 'true';
			$_SESSION["email"] = $email;
			$_SESSION["onoma"] = $onoma;
			$_SESSION["epwnumo"] = $epwnumo;
			$_SESSION["onoma_patros"] = $onoma_patros;
			$_SESSION["dieuthunsh"] = $dieuthunsh;
			$_SESSION["polh_katoikias"] = $polh_katoikias;
			$_SESSION["birthdate"] = $birthdate;
			$_SESSION["amka"] = $amka;
			$_SESSION["arithmos_thlefwnou"] = $arithmos_thlefwnou;
			$_SESSION["password"] = $password;
			$_SESSION["kathgoria_eggrafhs"] = $kathgoria_eggrafhs;
			header('Location: ../src/singup-complete.php');
		}
		else {
			header('Location: ../src/signup.php');
		}
	}
	elseif ( $kathgoria_eggrafhs == 'Συνταξιούχος' ) {
		$sql = "INSERT INTO retired (amka, onoma, epwnumo, onoma_patros, birth_date, dieuthunsh, password, polh_katoikias, arithmos_thlefwnou, email, amount)
		VALUES ('$amka', N'$onoma', N'$epwnumo', N'$onoma_patros', '$birthdate', N'$dieuthunsh', '$password', N'$polh_katoikias', '$arithmos_thlefwnou', '$email', null)";

		if ($conn->query($sql) === TRUE) {
			session_start();
			$_SESSION["usr"] = 'true';
			$_SESSION["email"] = $email;
			$_SESSION["onoma"] = $onoma;
			$_SESSION["epwnumo"] = $epwnumo;
			$_SESSION["onoma_patros"] = $onoma_patros;
			$_SESSION["dieuthunsh"] = $dieuthunsh;
			$_SESSION["polh_katoikias"] = $polh_katoikias;
			$_SESSION["birthdate"] = $birthdate;
			$_SESSION["amka"] = $amka;
			$_SESSION["arithmos_thlefwnou"] = $arithmos_thlefwnou;
			$_SESSION["password"] = $password;
			$_SESSION["kathgoria_eggrafhs"] = $kathgoria_eggrafhs;
			$_SESSION["amount"] = NULL;
			header('Location: ../src/singup-complete.php');
		}
		else {
			header('Location: ../src/singup.php');
		}
	}
	elseif ( $kathgoria_eggrafhs == 'Εγοδότης' ) {
		$sql = "INSERT INTO ergodoths (amka, onoma, epwnumo, onoma_patros, birth_date, dieuthunsh, password, polh_katoikias, arithmos_thlefwnou, email, amka_ergazomenou)
		VALUES ('$amka', N'$onoma', N'$epwnumo', N'$onoma_patros', '$birthdate', N'$dieuthunsh', '$password', N'$polh_katoikias', '$arithmos_thlefwnou', '$email', null)";

		if ($conn->query($sql) === TRUE) {
			session_start();
			$_SESSION["usr"] = 'true';
			$_SESSION["email"] = $email;
			$_SESSION["onoma"] = $onoma;
			$_SESSION["epwnumo"] = $epwnumo;
			$_SESSION["onoma_patros"] = $onoma_patros;
			$_SESSION["dieuthunsh"] = $dieuthunsh;
			$_SESSION["polh_katoikias"] = $polh_katoikias;
			$_SESSION["birthdate"] = $birthdate;
			$_SESSION["amka"] = $amka;
			$_SESSION["arithmos_thlefwnou"] = $arithmos_thlefwnou;
			$_SESSION["password"] = $password;
			$_SESSION["kathgoria_eggrafhs"] = $kathgoria_eggrafhs;
			$_SESSION["amka_ergazomenou"] = null;
			header('Location: ../src/singup-complete.php');
		}
		else {
			header('Location: ../src/singup.php');
		}
	}

	$conn->close();
?>