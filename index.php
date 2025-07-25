<?php
include 'db_connect.php';
$result = mysqli_query($conn, "SELECT * FROM tickets");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Flight Ticket Booking</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Flight Ticket Booking System</h2>
    <a href="add_ticket.php">+ Add New Ticket</a>
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Flight</th><th>From</th><th>To</th><th>Date</th><th>Actions</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['passenger_name'] ?></td>
            <td><?= $row['flight_number'] ?></td>
            <td><?= $row['source'] ?></td>
            <td><?= $row['destination'] ?></td>
            <td><?= $row['travel_date'] ?></td>
            <td>
                <a href="edit_ticket.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
