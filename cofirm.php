<?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$car_id = $_POST['car_id'];
$start = $_POST['start_date'];
$end = $_POST['end_date'];

$conn->query("INSERT INTO bookings (car_id, name, email, start_date, end_date)
VALUES ('$car_id', '$name', '$email', '$start', '$end')");

echo "<h1>Booking Confirmed</h1><p>Thank you, $name. Your rental has been booked.</p>";
?>
