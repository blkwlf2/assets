<?php
//Sql Query To Fetch News Feed From Database
	$servername = "localhost";
	$username = "root";
	$password = "changeme";
	$dbname = "tfvisuals";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
$sql = "Select Top * from latest";
$result = $result=mysqli_query($con,$sql);
while($row =  $result->fetch_assoc())
{
    echo("<div id='latest'>");
    echo("<div class='comment-head'>" . $row['title'] . "</div>");
    echo("<div class='comment-text'>" . $row['body'] . "</div>");
    echo("</div>");
}
?>