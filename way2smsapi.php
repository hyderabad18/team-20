<?php

@include("way2smsapi.html");
if(isset($_POST['submit']))
{
	$name=$_SESSION['name'];
	$num=$_SESSION['num'];
	$message='Hi ' . $name;

	function curl_get_contents($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	$json = json_decode(curl_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=xxx&Password=xxx&Message=".urlencode($message)."&To=".urlencode($num)."&Key=xxx"),true);
	/*if ($json["status"]==="success") 
		echo $json["msg"];
		//your code when send success
	}else{
		echo $json["msg"];
		//your code when not send
	}
	*/
}
?>
 