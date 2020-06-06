<?php
$servername = "localhost";
$dbname = read_file('credential.cfg')['db'];;
$username = read_file('credential.cfg')['username'];;
$password = read_file('credential.cfg')['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*echo "Connected successfully";

if (mysqli_select_db($conn,'gyantu'));{
    echo "DB Selected";
}
if(!mysqli_select_db($conn,'gyantu')){
    echo "DB not selected";
}*/

?>
