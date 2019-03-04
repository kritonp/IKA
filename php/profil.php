<?php
	header("content-type: text/html;charset=utf-8");
	session_start();
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

	if ( $_SESSION["kathgoria_eggrafhs"] == 'Συνταξιούχος' ) {
		$amount = $_POST["amount"];
	}

	if ( $_SESSION["kathgoria_eggrafhs"] == 'Εγοδότης' ) {
		$amka_ergazomenou = $_POST["amka_ergazomenou"];
	}

	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "ika_db");
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}


	$kathgoria_eggrafhs = $_SESSION["kathgoria_eggrafhs"];

	if ( $kathgoria_eggrafhs == 'Ασφαλισμένος' ) {
		$sql = "UPDATE asfalismenoi SET onoma        = N'$onoma',
										epwnumo      = N'$epwnumo',
										onoma_patros = N'$onoma_patros',
										dieuthunsh   = N'$dieuthunsh',
										birth_date   = '$birthdate',
										password     = '$password',
										polh_katoikias     = N'$polh_katoikias',
										arithmos_thlefwnou = '$arithmos_thlefwnou',
										email = '$email'
									WHERE amka= '$amka'";
		if ($conn->query($sql) === TRUE) {
			$_SESSION["email"] = $email;
			$_SESSION["onoma"] = $onoma;
			$_SESSION["epwnumo"] = $epwnumo;
			$_SESSION["onoma_patros"] = $onoma_patros;
			$_SESSION["dieuthunsh"] = $dieuthunsh;
			$_SESSION["polh_katoikias"] = $polh_katoikias;
			$_SESSION["birthdate"] = $birthdate;
			$_SESSION["arithmos_thlefwnou"] = $arithmos_thlefwnou;
			$_SESSION["password"] = $password;
			header('Location: ../src/index.php');
		}
		else {
			header('Location: ../src/profil.php');
		}
	}
	elseif ( $kathgoria_eggrafhs == 'Συνταξιούχος' ) {
		$sql = "UPDATE retired SET onoma        = N'$onoma',
										epwnumo      = N'$epwnumo',
										onoma_patros = N'$onoma_patros',
										dieuthunsh   = N'$dieuthunsh',
										birth_date   = '$birthdate',
										password     = '$password',
										polh_katoikias     = N'$polh_katoikias',
										arithmos_thlefwnou = '$arithmos_thlefwnou',
										email = '$email',
										amount = '$amount'
									WHERE amka= '$amka'";
		if ($conn->query($sql) === TRUE) {
			$_SESSION["email"] = $email;
			$_SESSION["onoma"] = $onoma;
			$_SESSION["epwnumo"] = $epwnumo;
			$_SESSION["onoma_patros"] = $onoma_patros;
			$_SESSION["dieuthunsh"] = $dieuthunsh;
			$_SESSION["polh_katoikias"] = $polh_katoikias;
			$_SESSION["birthdate"] = $birthdate;
			$_SESSION["arithmos_thlefwnou"] = $arithmos_thlefwnou;
			$_SESSION["password"] = $password;
			$_SESSION["amount"] = $amount;
			header('Location: ../src/index.php');
		}
		else {
			header('Location: ../src/profil.php');
		} 
	}
	elseif ( $kathgoria_eggrafhs == 'Εγοδότης' ) {
		$sql = "UPDATE ergodoths SET onoma        = N'$onoma',
										epwnumo      = N'$epwnumo',
										onoma_patros = N'$onoma_patros',
										dieuthunsh   = N'$dieuthunsh',
										birth_date   = '$birthdate',
										password     = '$password',
										polh_katoikias     = N'$polh_katoikias',
										arithmos_thlefwnou = '$arithmos_thlefwnou',
										email = '$email'
									WHERE amka= '$amka'";
		if ($conn->query($sql) === TRUE) {
			$_SESSION["email"] = $email;
			$_SESSION["onoma"] = $onoma;
			$_SESSION["epwnumo"] = $epwnumo;
			$_SESSION["onoma_patros"] = $onoma_patros;
			$_SESSION["dieuthunsh"] = $dieuthunsh;
			$_SESSION["polh_katoikias"] = $polh_katoikias;
			$_SESSION["birthdate"] = $birthdate;
			$_SESSION["arithmos_thlefwnou"] = $arithmos_thlefwnou;
			$_SESSION["password"] = $password;
			header('Location: ../src/index.php');
		}
		else {
			header('Location: ../src/profil.php');
		} 
	}

//	$conn->close();
?>