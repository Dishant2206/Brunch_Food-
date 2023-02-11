<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="food_conn";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
	$people = $_POST['people'];	
	$date = $_POST['date'];
	$time = $_POST['time'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$sql_query = "INSERT INTO food_table (people,date,time,name,email,number) 
	VALUES('$people','$date','$time','$name','$email','$phone')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "New Details Entry inserted successfully !";
		echo "<script type='text/javascript'>alert('New Details Entry inserted successfully...');
		</script>";
		
	}
	else
	{
		echo "Error : " . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>