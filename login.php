<?php

@include('login.html');


$con = mysqli_connect("localhost","root","","youth4jobs");
if($con==false)
{
	die("Error" . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	session_start();
	$mail=$_POST['email'];
	$p=$_POST['password'];
	$pass=md5($p);
	$flag=0;
	$_SESSION['mail']=$mail;
	$squery="SELECT * from student where smail='$mail' and spass='$pass'";
	$sresult=mysqli_query($con,$squery);
	$sres=mysqli_num_rows($sresult);
	if($sres==TRUE)
	{
		$flag=1;
		header('location:StudentPage.html');
	}
	
	$uquery="SELECT * from university where smail='$mail' and unpass='$pass'";
	$uresult=mysqli_query($con,$uquery);
	$ures=mysqli_num_rows($uresult);
	if($ures==TRUE){
			$flag=1;
			header('location:substudent.php');
	}
	
	$aquery="SELECT * from admin where aduname='$mail' and adpass='$pass'";
	$aresult=mysqli_query($con,$aquery);
	$ares=mysqli_num_rows($aresult);
	if($ares==TRUE){
		$flag=1;
		header('location:admin.html');
	}
	
	$cquery="SELECT * from corporate where smail='$mail' and corppass='$pass'";
	$cresult=mysqli_query($con,$cquery);
	$cres=mysqli_num_rows($cresult);
	if($cres==TRUE){
		$flag=1;
		header('location:corporate.html');
	}
	
	if($flag==0){
	  echo "<center><b>user is not valid.</b></center>";
	}

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

