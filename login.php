<?php

@include('login.html');


$con = mysqli_connect("localhost","root","","youth4jobs");
if($con==false)
{
	die("Error" . mysqli_connect_error());
}
echo "db connected";
if(isset($_POST['submit']))
{
	echo 'posted';
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	$flag=0;
	echo $mail;
	echo 'took values';
	$squery="SELECT * from student where smail='$mail' and spass='$pass'";
	$sresult=mysqli_query($con,$squery);
	$sres=mysqli_num_rows($sresult);
	if($sres==TRUE)
	{
		echo "true";
		$flag=1;
		header('location:StudentPage.html');
	}
	/*
	$uquery="SELECT * from university where unmail='$mail' and unpass='$pass'";
	$uresult=mysqli_query($con,$uquery);
	$ures=mysqli_num_rows($uresult);
	if($ures==TRUE){
			$flag=1;
			header('location:');
	}
	
	$aquery="SELECT * from admin where aduname='$mail' and adpass='$pass'";
	$aresult=mysqli_query($con,$aquery);
	$ares=mysqli_num_rows($aresult);
	if($ares==TRUE){
		$flag=1;
		header('location:');
	}
	
	$cquery="SELECT * from corporate where corpmail='$mail' and corppass='$pass'";
	$cresult=mysqli_query($con,$cquery);
	$cres=mysqli_num_rows($cresult);
	if($cres==TRUE){
		$flag=1;
		header('location:');
	}
	
	if($flag==0){
	  echo "<b>user is not valid.</b>";
	  header('location:');
	}
	*/
}


/*
$q1="INSERT INTO finaltable VALUES('$fn','$ln','$mn','$mail','$p','$bday','$gen')";
		$r1=mysqli_query($conn,$q1);
		if($r1==true)
			echo "REGISTERED SUCCESSFULLY";
		else
			echo "Error" ;
*/
?>

