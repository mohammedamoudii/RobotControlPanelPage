<?php
include 'conn.php'; // Include the connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $direction = $_POST['direction'];

    // Get current count of directions
    $countStmt = $conn->query("SELECT COUNT(*) as count FROM directions");
    $countResult = $countStmt->fetch_assoc();
    $currentCount = $countResult['count'];

    // If there are more than 2 directions, delete excess
    if ($currentCount >= 2) {
        $deleteStmt = $conn->query("DELETE FROM directions ORDER BY id ASC LIMIT " . ($currentCount - 1));
        if (!$deleteStmt) {
            echo "Error deleting excess directions: " . $conn->error;
            exit;
        }
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO directions (currentDirection) VALUES (?)");
    $stmt->bind_param("s", $direction);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New direction stored successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
