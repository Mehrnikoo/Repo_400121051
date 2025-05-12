<?php
// filepath: /home/glitching0ut/Documents/university/projects/public/read.php
// This file is responsible for displaying records from the database.
// It connects to the database, retrieves records, and displays them in a table format.
// It also includes links to edit and delete each record.
include('../includes/db.php');

$stmt = $pdo->query("SELECT * FROM website");
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>Records</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Actions</th></tr>";
foreach ($records as $record) {
    echo "<tr>";
    echo "<td>{$record['id']}</td>";
    echo "<td>{$record['name']}</td>";
    echo "<td><a href='update.php?id={$record['id']}'>Edit</a> | <a href='delete.php?id={$record['id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>