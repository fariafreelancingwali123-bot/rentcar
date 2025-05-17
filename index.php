<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>RentACar - Home</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #f4f6f8;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #007bff;
            color: white;
            width: 100%;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        h1 {
            margin: 0;
        }

        form {
            background: white;
            margin-top: 30px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 600px;
        }

        form input, form select, form button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        form button {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            border: none;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Find Your Perfect Rental Car</h1>
</header>

<form action="list.php" method="GET">
    <input type="text" name="location" placeholder="Enter Pickup Location (e.g., Islamabad)" required>
    
    <input type="date" name="start_date" required>
    
    <input type="date" name="end_date" required>

    <select name="car_type">
        <option value="">All Car Types</option>
        <option value="SUV">SUV</option>
        <option value="Sedan">Sedan</option>
        <option value="Hatchback">Hatchback</option>
        <option value="Luxury">Luxury</option>
    </select>

    <button type="submit">Search Cars</button>
</form>

</body>
</html>
