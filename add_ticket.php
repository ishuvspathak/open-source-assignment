<!DOCTYPE html>
<html>
<head>
    <title>Add Ticket</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Book New Flight Ticket</h2>
    <form action="insert.php" method="post">
        Name: <input type="text" name="name" required><br><br>
        Flight No: <input type="text" name="flight" required><br><br>
        Source: <input type="text" name="source" required><br><br>
        Destination: <input type="text" name="destination" required><br><br>
        Date of Travel: <input type="date" name="date" required><br><br>
        <input type="submit" value="Book Ticket">
    </form>
</body>
</html>
