<?php
include 'conn.php'; // Include the connection file

// Query to get the last direction
$stmt = $conn->query("SELECT currentDirection FROM directions ORDER BY id DESC LIMIT 1");
if ($stmt->num_rows > 0) {
    $row = $stmt->fetch_assoc(); #fetch row only one row 
    $lastDirection = $row['currentDirection'];
} else {
    $lastDirection = "No direction stored yet.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Stored Direction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Last Stored Direction</h1>
        <p><?php echo $lastDirection; ?></p>
    </div>
</body>
</html>
