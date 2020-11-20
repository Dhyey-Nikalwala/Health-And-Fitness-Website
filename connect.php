<?php
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
if(!empty($username)){
if(!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword	= "";
$dbname = "oep";



$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
	die('connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	
}
else
{
	$sql = "INSERT INTO login(username,password) values ('$username','$password')";
	if($conn->query($sql)){
		echo "New Record Is Inserted";
	
	}
	else
	{
		echo "Error: ".$sql ."<br>". $conn->error;
	}
	
	$conn->close();
	
}
else{
	echo "User Name Should Not Be Empty";
	die();
}

}
else{
	echo "User Name Should Not Be Empty";
	die();
}
?>