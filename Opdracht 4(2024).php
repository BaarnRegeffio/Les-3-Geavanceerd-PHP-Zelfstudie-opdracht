<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="filmdatabase";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo ("Connected successfully");


$query = "Select * FROM film";
$result=$conn->query($query);

If ($result === false){
    die("Query failed:" . $conn->error);


}

while ($row = $result->fetch_assoc()){
    echo "id:" . $row["id"]. "- title:" . $row["title"]. "<br>";
}


//Ga naar Xammp folder >> FilmDate
//Query maken
?>


