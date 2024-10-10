<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $age = htmlspecialchars($_POST['age']);
    $address = htmlspecialchars($_POST['address']);

    // Display the collected data
    echo "<h2>Contact Details:</h2>";
    echo "<p><strong>First Name:</strong> " . $firstname . "</p>";
    echo "<p><strong>Last Name:</strong> " . $lastname . "</p>";
    echo "<p><strong>Age:</strong> " . $age . "</p>";
    echo "<p><strong>Address:</strong> " . $address . "</p>";
} else {
    echo "No data submitted.";
}
?>
