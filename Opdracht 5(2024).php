
<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="filmdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);




$titel ="BeeKeeper";
$Genre =" Action";
$Regisseur =" Frank Darabont";
$releasejaar= 2024;

$sql="INSERT INTO films (titel, Genre, Regisseur, releasejaar) VALUES ('$titel', '$Genre', '$Regisseur', '$releasejaar')";



if ($conn->query($sql) === TRUE) {
    echo "Nieuwe film toegevoegd!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

