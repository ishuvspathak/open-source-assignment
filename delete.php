<?php
include 'db_connect.php';
$id = $_GET['id'];

$sql = "DELETE FROM tickets WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Delete error: " . mysqli_error($conn);
}
?>
