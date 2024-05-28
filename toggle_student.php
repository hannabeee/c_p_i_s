<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $conn->real_escape_string($_POST['student_id']);

    // Fetch current status
    $sql = "SELECT is_active FROM students WHERE id='$student_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $new_status = $row['is_active'] ? 0 : 1;

        // Update status
        $update_sql = "UPDATE students SET is_active='$new_status' WHERE id='$student_id'";
        if ($conn->query($update_sql) === TRUE) {
            header("Location: admin_dashboard.php");
        } else {
            echo "Error updating status: " . $conn->error;
        }
    } else {
        echo "Student not found.";
    }
}

$conn->close();
?>
