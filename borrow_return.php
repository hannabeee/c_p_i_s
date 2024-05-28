<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $action = $_POST['action'];

    if ($action == 'borrow') {
        // Borrow the item
        $sql = "UPDATE items SET quantity_left = quantity_left - 1 WHERE id = $id AND quantity_left > 0 AND can_borrow = TRUE";
    } elseif ($action == 'return') {
        // Return the item
        $sql = "UPDATE items SET quantity_left = quantity_left + 1 WHERE id = $id";
    }

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }

    $conn->close();
}
?>
