<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "acara8_pgweb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM penduduk";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1px'><tr>
<th>Kecamatan</th>
<th>Longitude</th>
<th>Latitude</th>
<th>Luas</th>
<th>Jumlah_Penduduk</th>";
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Kecamatan"].
    "</td><td>".$row["Longitude"].
    "</td><td>".$row["Latitude"].
    "</td><td>".$row["Luas"].
    "</td><td>".$row["Jumlah_Penduduk"].
    
    "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>