<?php
include 'db_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$flight = $_POST['flight'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$date = $_POST['date'];

$sql = "UPDATE tickets SET 
            passenger_name='$name', 
            flight_number='$flight', 
            source='$source', 
            destination='$destination', 
            travel_date='$date' 
        WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error updating: " . mysqli_error($conn);
}
?>
