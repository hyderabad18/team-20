<?php
session_start();
$conn=mysqli_connect("localhost","root","","youth4jobs");

if($conn==false)
{
	die("connection error" . mysqli_connect_error());
}
@include('MockTest.html');
$c=0;
if(isset($_POST['submit']))
{
	if($_POST['vehicle']=='6.25')
	{
		
		$c=$c+1;
	}
	if($_POST['vehicle']=='6.5')
	{
		
	}
	if($_POST['vehicle']=='7.25')
	{
		
	}
	if($_POST['vehicle']=='7.5')
	{
		
	}
	if($_POST['vehicle1']=='76')
	{
		
	}
	if($_POST['vehicle1']=='76.5')
	{
		$c=$c+1;
	}
	if($_POST['vehicle1']=='85')
	{
		
	}
	if($_POST['vehicle1']=='datainadequate')
	{
		
	}
	if($_POST['vehicle2']=='3500')
	{
		
	}
	if($_POST['vehicle2']=='4000')
	{
		
	}
	if($_POST['vehicle2']=='4050')
	{
		$c=$c+1;
	}
	if($_POST['vehicle2']=='5000')
	{
		
	}
	if($_POST['vehicle3']=='35')
	{
		
	}
	if($_POST['vehicle3']=='40')
	{
		
	}
	if($_POST['vehicle3']=='50')
	{
		
	}
	if($_POST['vehicle3']=='none')
	{
		$c=$c+1;
	}
	if($_POST['vehicle4']=='7.58')
	{
		$c=$c+1;
	}
	if($_POST['vehicle4']=='8')
	{
		
	}
	if($_POST['vehicle4']=='8.50')
	{
		
	}
	if($_POST['vehicle4']=='9')
	{
		
	}
	$s=$_SESSION['mail'];
	$q="update student set mockscore='$c' where smail='$s'";
	$_SESSION['val']=$c;
	$r=mysqli_query($conn,$q);
	//$res=mysqli_num_rows($r);*/
	//echo $c;
	header('location:charts.php');
}
?>
	
	
	