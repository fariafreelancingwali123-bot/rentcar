<?php include 'db.php';
$id = $_GET['id'];
$car = $conn->query("SELECT * FROM cars WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Book Car</title></head>
<body>
    <h1>Book <?= $car['name'] ?></h1>
    <form action="confirm.php" method="POST">
        <input type="hidden" name="car_id" value="<?= $car['id'] ?>">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <input type="date" name="start_date" required><br>
        <input type="date" name="end_date" required><br>
        <button type="submit">Confirm Booking</button>
    </form>
</body>
</html>
