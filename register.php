<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['name']) && isset($_POST['studentid']) && isset($_POST['password'])) {
        $name = $conn->real_escape_string($_POST['name']);
        $studentid = $conn->real_escape_string($_POST['studentid']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (name, student_id, password) VALUES ('$name', '$studentid', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
    header('Location: login.php');
    exit;

    }
}
$conn->close();
?>

