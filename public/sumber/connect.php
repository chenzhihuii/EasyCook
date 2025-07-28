<?php
$servername = "localhost";
$username = "datg1717_TWS5";
$password = "S3dotan22_";
$dbname = "datg1717_easycook";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Gagal terhubung dengan database: " . $conn->connect_error);
}
$sql="SELECT * FROM ayam WHERE Title or Steps or Ingredients LIKE '%".$_GET['search']."%' LIMIT 5";
//$sql ="SELECT * FROM ayam WHERE Title or Steps or Ingredients LIKE '%jagung%'";
$query = mysqli_query($conn, $sql);
$resep = mysqli_fetch_array($query);

?>