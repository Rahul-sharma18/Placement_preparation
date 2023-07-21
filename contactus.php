<?php
    $server_name="localhost";
	$username="root";
	$password="";
	$database_name="contact";
	$conn=mysqli_connect ($server_name, $username, $password, $database_name);
	//checking the connection
	if(!$conn)
	{
		die( "Connection Failed:" . mysqli_connect_error());
	}

	if(isset($_POST['submit']))
	{

		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$subjects = $_POST['subjects'];
		$messages = $_POST['messages'];
        $question = $_POST['query'];

		$sql_query = "INSERT INTO contact_tb(fname, email, subjects,messages,query) VALUES ('$fname','$email','$subjects','$messages','$question')";

		if (mysqli_query($conn, $sql_query) )
		{
			echo '<script>alert("Thanks for your feedback")</script>';
			echo file_get_contents("project4.html");
		}
		else
		{
			echo "Error:"."".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>