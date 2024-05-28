<?php
include 'db.php';

// Fetch items from the database
$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>CPIS</h2>
            <span>Student</span>
        </div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-th-list"></i> Items</a></li>
            <li><a href="#" id="toggle-dark-mode"><i class="fa fa-moon-o" id="dark-mode-icon"></i> Dark Mode</a></li>
        </ul>
    </div>
    <div class="dashboard_content_container">
        <div class="dashboard_topNav">
            <a href="#" id="toggleBtn"><i class="fa fa-navicon"></i></a>
            <a href="logout.php" id="logoutBtn"><i class="fa fa-power-off"></i> Log-out</a>
        </div>
        <div class="dashboard_content">
            <div class="dashboard_content_main">
                <div class="items_table">
                    <h2>Items</h2>
                    <table id="items-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Mode</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Quantity</th>
                                <th>Quantity Left</th>
                                <th>Can Borrow</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td><img src='".$row['image']."' alt='item image' width='50'></td>";
                                    echo "<td>".$row['mode']."</td>";
                                    echo "<td>".$row['category']."</td>";
                                    echo "<td>".$row['brand']."</td>";
                                    echo "<td>".$row['quantity']."</td>";
                                    echo "<td>".$row['quantity_left']."</td>";
                                    echo "<td>".($row['can_borrow'] ? 'Yes' : 'No')."</td>";
                                    echo "<td>";
                                    if ($row['can_borrow']) {
                                        // If item can be borrowed, show "Borrow" button
                                        echo "<button class='borrow-btn' data-id='".$row['id']."'>Borrow</button>";
                                    } else {
                                        // If item cannot be borrowed, show "Return" button
                                        echo "<button class='return-btn' data-id='".$row['id']."'>Return</button>";
                                    }
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>No items found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Borrow button click handler
            $('.borrow-btn').on('click', function() {
                var itemId = $(this).data('id');
                // You can implement borrowing functionality here
                alert('Borrow button clicked for item with ID: ' + itemId);
            });

            // Return button click handler
            $('.return-btn').on('click', function() {
                var itemId = $(this).data('id');
                // You can implement returning functionality here
                alert('Return button clicked for item with ID: ' + itemId);
            });
        });
    </script>
</body>
</html>

<?php
$conn->close();
?>
