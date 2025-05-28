
<?php
// Include database connection
require_once '../config/database.php';

// Check if 'id' is set in the GET request
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare and execute the delete query
    $stmt = $pdo->prepare("DELETE FROM your_table WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Redirect or show success message
        header("Location: index.php?message=Record+deleted+successfully");
        exit();
    } else {
        echo "Error deleting record.";
    }
} else {
    echo "Invalid request.";
}
?>