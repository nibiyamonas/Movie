<?php
# Init the MySQL Connection
$host = "127.0.0.1";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, "movies");

 # Prepare the SELECT Query
$sql = "SELECT ID,Movie_name,Lead_actor,Lead_actress,Director,Release_year FROM movie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. " - Name: " . $row["Movie_name"]. " Actor: " . $row["Lead_actor"]. " Actress:" . $row["Lead_actress"]." Director: " . $row["Director"]." Year: " . $row["Release_year"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>