<?php
$conn = new mysqli("localhost", "root", "", "website_app");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $conn->query("INSERT INTO users (name) VALUES ('$name')");
}

header("Location: index.html");
?>
