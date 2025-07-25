<?php
include 'db_connect.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tickets WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Ticket</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Edit Ticket #<?= $id ?></h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        Name: <input type="text" name="name" value="<?= $row['passenger_name'] ?>" required><br><br>
        Flight No: <input type="text" name="flight" value="<?= $row['flight_number'] ?>" required><br><br>
        Source: <input type="text" name="source" value="<?= $row['source'] ?>" required><br><br>
        Destination: <input type="text" name="destination" value="<?= $row['destination'] ?>" required><br><br>
        Date: <input type="date" name="date" value="<?= $row['travel_date'] ?>" required><br><br>
        <input type="submit" value="Update Ticket">
    </form>
</body>
</html>
