<?php

$response=array();
if($_SERVER['REQUEST_METHOD']=='POST')
{
$query_username = $_POST['user'];
$query_password = $_POST['pass'];
$servername = "54.238.205.129";
$username = "chethan";
$password = "17071998Gc!12";

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM finance_app.users where username LIKE '".$query_username."' AND password LIKE '".$query_password."';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $response['status']="200";
  $response['message']=$row["user_id"]. "," . $row["username"]. "," . $row["password"];
}
else{
$response['status']="404";
$response['message']="No User exists";
}
}
else
{
    $response['status']="500";
    $response['message']="Invalid Request";
    
}
echo json_encode($response)
?>
