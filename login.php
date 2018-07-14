<?php
$con = mysqli_connect("localhost","root","","youth4jobs");
if($con==false)
{
	die("Error" . mysqli_connect_error());
}

@include('index.html');

if(isset($_POST['submit']))
{
	
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	$flag=0;
	
	$squery="SELECT * from student where smail='$mail' and spass='$pass'";
	$sresult=mysqli_query($con,$squery);
	$sres=mysqli_num_rows($sresult);
	if($sres==TRUE)
	{
		$flag=1;
		header('location:StudentPage.html');
	}
	
	$uquery="SELECT * from university where unmail='$mail' and unpass='$pass'";
	$uresult=mysqli_query($conn,$uquery);
	$ures=mysqli_num_rows($uresult);
	if($ures==TRUE){
			$flag=1;
			header('location:');
	}
	
	$aquery="SELECT * from admin where aduname='$mail' and adpass='$pass'";
	$aresult=mysqli_query($conn,$aquery);
	$ares=mysqli_num_rows($aresult);
	if($ares==TRUE){
		$flag=1;
		header('location:');
	}
	
	$cquery="SELECT * from corporate where corpmail='$mail' and corppass='$pass'";
	$cresult=mysqli_query($conn,$cquery);
	$cres=mysqli_num_rows($cresult);
	if($cres==TRUE){
		$flag=1;
		header('location:');
	}
	
	if($flag==0){
	  echo "<b>user is not valid.</b>";
	  header('location:');
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

