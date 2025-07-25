<?php
include 'db_connect.php';

$name = $_POST['name'];
$flight = $_POST['flight'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$date = $_POST['date'];

$sql = "INSERT INTO tickets (passenger_name, flight_number, source, destination, travel_date)
        VALUES ('$name', '$flight', '$source', '$destination', '$date')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
