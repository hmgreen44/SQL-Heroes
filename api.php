<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sqlheroes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$route = $_GET['route'];

switch ($route) {
  case "getAllHeroes":
    $myData = getAllHeroes($conn);
    break;
  case "getHeroByID":
    $myData = getHeroByID($conn, 5);
    break;
  default:
    echo "Your favorite c";
}

echo $myData;


$conn->close();


function getAllHeroes($conn){
  $data = "";
  
  $sql = "SELECT * FROM heroes";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data .= "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["about_me"]. "<br>";
  }
 } else {
  $data = "0 results";
 }
   
  return $data;
   
 }

function getHeroByID($conn, $heroID){
  $data = "";
  
  $sql = "SELECT * FROM heroes WHERE id = " . $heroID;
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data .= "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["about_me"]. "<br>";
  }
 } else {
  $data = "0 results";
 }
   
  return $data;
   
 }


?>