<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Available Cars</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Available Cars</h1>
    <?php
    $location = $_GET['location'];
    $type = $_GET['car_type'];
    $sql = "SELECT * FROM cars WHERE location LIKE '%$location%'";
    if (!empty($type)) {
        $sql .= " AND type='$type'";
    }
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='car'>";
        echo "<h2>{$row['name']}</h2>";
        echo "<img src='{$row['image']}' width='200'>";
        echo "<p>Type: {$row['type']}</p>";
        echo "<p>Price: {$row['price']} per day</p>";
        echo "<a href='book.php?id={$row['id']}'>Book Now</a>";
        echo "</div>";
    }
    ?>
</body>
</html>
