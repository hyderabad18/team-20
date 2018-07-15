<?php
session_start();


	$name=$_SESSION['name'];
	$num=$_SESSION['num'];
	$message='Hi ' . $name;

	/*function curl_get_contents($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}*/
	
	$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9494883379&Password=Harry123&Message=".urlencode($message)."&To=".urlencode($num)."&Key=myadanl3FvahoYAO4RKbgfSjCp8"),true);
	if($_SESSION['val'] == 'login')
	{
		echo "LOGIN";
		//header('location:login.php');
	}
	if($_SESSION['val'] == 'home')
	{
		//echo "HOME";
		header('location:http://localhost:8080/team-20/Home.html');
	}/*if ($json["status"]==="success") {
		echo $json["msg"];
		//your code when send success
	}else{
		echo $json["msg"];
		//your code when not send
	}*/
	

?>
 