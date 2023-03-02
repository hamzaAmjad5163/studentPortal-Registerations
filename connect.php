<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username,$password ,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	else{
		$sql = "insert into registeration (firstname,lastname,department,gender,birth,city,address,zip,country) VALUES ('$POST_[firstname],'$POST_[lastname]','$POST_[department]','$POST_[gender]','$POST_[birth]','$POST_[city]','$POST_[address]','$POST_[zip]','$POST_[country]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>