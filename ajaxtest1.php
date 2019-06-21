<?php

	/*echo "<pre>";
	print_r($_GET);
	echo "<pre>";

	echo "<pre>";
	print_r($_POST);
	echo "<pre>";
	exit();
*/

	include 'apps.txt';

	if ($fh = fopen('apps.txt', 'r')) {
	    while (!feof($fh)) {
	        $line = fgets($fh);
	        echo $line;
	    }
	    fclose($fh);
	}

	sleep(2);

	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$name = trim($_POST['name']);
	$dt = date("Y-m-d H:i:s");
	$errors = [];

	if($email == ""){
		$errors["email"] = "Поле email обязательно для заполнения";
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors["email"] = "Введите корректный адрес электронной почты!";
	}

	if($phone == ""){
		$errors["phone"] = "Поле телефон обязательно для заполнения";
	}
	if($name == ""){
		$errors["name"] = "Поле имя обязательно для заполнения";
	}

	$response = ["res"=>empty($errors), "errors" => $errors];

	if(empty($response)){
		file_put_contents("apps.txt", "$dt $email $phone \n", FILE_APPEND);
	}

	//echo file_get_contents('apps.txt');
	
	echo json_encode($response);