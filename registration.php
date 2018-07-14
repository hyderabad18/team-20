<?php
$conn=mysqli_connect("localhost","root","","youth4jobs");
if($conn==false)
{
	die("Error" . mysqli_connect_error());
}

@include('Registration.html');

if(isset($_POST['submit']))
{
	
	$fn=$_POST['user'];
	//$ln=$_POST['ulname'];
	$mn=$_POST['phone'];
	//$dob=$_POST['dob'];
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	$p=md5($pass);
	$skill=$_POST['skills'];
	//$state=$_POST['state'];
	//$district=$_POST['district'];
	$sdisable=$_POST['disability'];
	/*if($_POST['gender']=='male')
	{
		$gen='male';
	}
	if($_POST['gender']=='female')
	{
		$gen='female';
	}
	if($_POST['gender']=='others')
	{
		$gen='others';
	}*/
	$db=$_POST['selectbox'];
	if(isset($db) && $db==='Graduate') 
	{
		$acad='student';

		//echo $db==='PostGraduate';
	}
	else if(isset($db) && $db==='Institute') 
	{
		$acad='university';
		
	}
	else
	{
		if(isset($db) && $db==='Corporate')
		{
		$acad='corporate';
		
	}
	}
	
	//echo $acad;
	$q="SELECT * from $acad where smail='$mail'";
	$r=mysqli_query($conn,$q);
	$res=mysqli_num_rows($r);
	if($res==true)
	{
		echo "user with this mail already exists";
	}
	else
	{
		if($acad==='student')
		{
		$q1="INSERT INTO $acad (sname,spass,smail,smobile,sskill,sdisability ) VALUES('$fn','$p','$mail','$mn','$skill','$sdisable')";
		$r1=mysqli_query($conn,$q1);
		if($r1==true)

			echo "REGISTERED SUCCESSFULLY";
		else
			echo "Error" ;
		}
		if($acad==='university')
		{
		$q1="INSERT INTO $acad (unname,unpass,smail,unmobile,unskillset,undisability ) VALUES('$fn','$p','$mail','$mn','$skill','$sdisable')";
		$r1=mysqli_query($conn,$q1);
		if($r1==true)
			echo "REGISTERED SUCCESSFULLY";
		else
			echo "Error" ;
		}
		if($acad==='corporate')
		{
		$q1="INSERT INTO $acad (corpname,corppass,smail,corpmobile,corpreqskill,corpdisability ) VALUES('$fn','$p','$mail','$mn','$skill','$sdisable')";
		$r1=mysqli_query($conn,$q1);
		if($r1==true)
			echo "REGISTERED SUCCESSFULLY";
		else
			echo "Error" ;
		}
	}
}

?>



