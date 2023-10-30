<?php
$Kecamatan = $_POST['Kecamatan'];
$Longitude = $_POST['Longitude'];
$Latitude = $_POST['Latitude'];
$Luas = $_POST['Luas'];
$Jumlah_Penduduk = $_POST['Jumlah_Penduduk'];
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

$sql = "INSERT INTO penduduk (Kecamatan, Longitude, Latitude, Luas, Jumlah_Penduduk)
VALUES ('$Kecamatan',  '$Longitude', '$Latitude','$Luas', '$Jumlah_Penduduk')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header("Location: forminput.html");
//exit;
?>