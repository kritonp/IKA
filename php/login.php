<?php

	header("content-type: text/html;charset=utf-8");
	session_start();
	$_SESSION["flag"] = 0;

	$email =  $_POST["email"];
	$password =  $_POST["password"];
	$kathgoria_eggrafhs = $_POST["kathgoria_eggrafhs"];

	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "ika_db");
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	
	mysqli_set_charset($conn, "utf8");


	if ( $kathgoria_eggrafhs == 'Ασφαλισμένος' ) {
		$sql = "SELECT * from asfalismenoi";
		if (($result = $conn->query($sql)) !== FALSE)
		{
			//echo "query success";
			while($row = $result->fetch_assoc())
			{
				//echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>";
				if($email == $row["email"] && $password==$row["password"]){
					//session_start();
					$_SESSION["usr"] = 'true';
					$_SESSION["email"] = $row["email"];
					$_SESSION["onoma"] = $row["onoma"];
					$_SESSION["epwnumo"] = $row["epwnumo"];
					$_SESSION["onoma_patros"] = $row["onoma_patros"];
					$_SESSION["dieuthunsh"] = $row["dieuthunsh"];
					$_SESSION["polh_katoikias"] = $row["polh_katoikias"];
					$_SESSION["birthdate"] = $row["birth_date"];
					$_SESSION["amka"] = $row["amka"];
					$_SESSION["arithmos_thlefwnou"] = $row["arithmos_thlefwnou"];
					$_SESSION["password"] = $row["password"];
					$_SESSION["kathgoria_eggrafhs"] = $kathgoria_eggrafhs;

					$_SESSION["flag"] = 1;
					header('Location: ../src/index.php');
				}
			}
		}
		if ( $_SESSION['flag'] == 0){
			header('Location: ../src/login.php');
		}
		else
		{
			echo "query failure";
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	elseif ( $kathgoria_eggrafhs == 'Συνταξιούχος' ) {
		$sql = "SELECT * FROM retired";
		if (($result = $conn->query($sql)) !== FALSE)
		{
			//echo "query success";
			while($row = $result->fetch_assoc())
			{
				//echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>";
				if($email == $row["email"] && $password==$row["password"]){
					//session_start();
					
					$_SESSION["usr"] = 'true';
					$_SESSION["email"] = $row["email"];
					$_SESSION["onoma"] = $row["onoma"];
					$_SESSION["epwnumo"] = $row["epwnumo"];
					$_SESSION["onoma_patros"] = $row["onoma_patros"];
					$_SESSION["dieuthunsh"] = $row["dieuthunsh"];
					$_SESSION["polh_katoikias"] = $row["polh_katoikias"];
					$_SESSION["birthdate"] = $row["birth_date"];
					$_SESSION["amka"] = $row["amka"];
					$_SESSION["arithmos_thlefwnou"] = $row["arithmos_thlefwnou"];
					$_SESSION["password"] = $row["password"];
					$_SESSION["kathgoria_eggrafhs"] = $kathgoria_eggrafhs;
			
					$_SESSION["flag"] = 1;
					header('Location: ../src/index.php');
				}
			}
		}
		if ( $_SESSION['flag'] == 0){
			header('Location: ../src/login.php');
		}
		else
		{
			echo "query failure";
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	elseif ( $kathgoria_eggrafhs == 'Εγοδότης' ) {
		$sql = "SELECT * FROM ergodoths";
		if (($result = $conn->query($sql)) !== FALSE)
		{
			//echo "query success";
			while($row = $result->fetch_assoc())
			{
				//echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>";
				if($email == $row["email"] && $password==$row["password"]){
					//session_start();
					$_SESSION["usr"] = 'true';
					$_SESSION["email"] = $row["email"];
					$_SESSION["onoma"] = $row["onoma"];
					$_SESSION["epwnumo"] = $row["epwnumo"];
					$_SESSION["onoma_patros"] = $row["onoma_patros"];
					$_SESSION["dieuthunsh"] = $row["dieuthunsh"];
					$_SESSION["polh_katoikias"] = $row["polh_katoikias"];
					$_SESSION["birthdate"] = $row["birth_date"];
					$_SESSION["amka"] = $row["amka"];
					$_SESSION["arithmos_thlefwnou"] = $row["arithmos_thlefwnou"];
					$_SESSION["password"] = $row["password"];
					$_SESSION["kathgoria_eggrafhs"] = $kathgoria_eggrafhs;
					$_SESSION["amka_ergazomenou"] = $row["amka_ergazomenou"];

					$_SESSION["flag"] = 1;
					header('Location: ../src/index.php');
				}
			}
		}
		if ( $_SESSION['flag'] == 0){
			header('Location: ../src/login.php');
		}
		else
		{
			echo "query failure";
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	$conn->close();
?>