<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_hamzabrss";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*$sql = "SELECT CodAttore, Nome, AnnoNascita, Nazionalita FROM attori";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["CodAttore"]. " - Attore: " . $row["Nome"]. " anno di nascita: " . $row["AnnoNascita"]. " Nazionalita: " . $row["Nazionalita"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();*/
?>