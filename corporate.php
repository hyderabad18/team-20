<?php

session_start();
@include('corporate.html');

$con = mysqli_connect("localhost","root","","youth4jobs");
if($con==false)
{
	die("Error" . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	$vac=$_POST['vacancies'];
	$pos=$_POST['position'];
	$skill=$_POST['skillset'];
	$dis = $_POST['disabilities'];
	$loc = $_POST['location'];
	$cutoff = $_POST['cutoff'];
	$mail= $_SESSION['mail'];
	$query="UPDATE corporate SET corpvac='$vac',corppos='$pos',corpreqskill='$skill',corpdisability='$dis',corploc='$loc',corpcutoff='$cutoff' WHERE smail='$mail'";
	$result=mysqli_query($con,$query);
	if($result==TRUE)
	{
		echo "Updated the Database";
	}
}
?>