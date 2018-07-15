<?php 
/* Open connection to "zing_db" MySQL database. */
$mysqli = new mysqli('localhost','root','','sms');
 
/* Check the connection. */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
/* Fetch result set from t_test table */
$data=mysqli_query($mysqli,"SELECT * FROM student");
?>

<script>
var myData=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['standard'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
<?php
$data=mysqli_query($mysqli,"SELECT * FROM student");
?>
var myLabels=[<?php 
while($info=mysqli_fetch_array($data))
    echo '"'.$info['standard'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
</script>

<?php
/* Close the connection */
$mysqli->close(); 
?>