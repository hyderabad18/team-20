<?php
session_start();

$conn=mysqli_connect("localhost","root","","youth4jobs");
if($conn==false)
{
	die("connect error". mysqli_connect_error());
}

@include('university.html');


if(isset($_POST['submit']))
{
	$n=$_POST['name'];
	$mail=$_POST['email'];
	$mobile=$_POST['mobile'];
	$skills=$_POST['skillset'];
	$certificate=$_POST['certificate'];
	$_SESSION['certi']=$certificate;
	
	
	
	$q="select * from substudent1 where mail='$mail'";
	$r=mysqli_query($conn,$q);
	$res=mysqli_num_rows($r);
	if($res==true)
	{
	}
	else
	{
	
		$q="INSERT INTO SUBSTUDENT1(name,mail,mobile,skills,certificate) VALUES('$n','$mail','$mobile','$skills','$certificate')";
		$r=mysqli_query($conn,$q);
		
		
	}

}
/*if(isset($_POST['submit1']))
{
if($_POST['excel'])
{
	{
		header('location:exceltodb.php');
	}
}
}*/

?>
	