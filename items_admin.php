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
    <style>
        /* Additional styles */
        .text-center {
            text-align: center;
        }
    </style>
</head>s
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>CPIS</h2>
            <span>Admin</span>
        </div>
        <ul class="sidebar-menu">
            <li><a href="admin_dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="items_admin.php"><i class="fa fa-th-list"></i> Items</a></li>
            <li><a href="borrower.php"><i class="fa fa-users"></i> Borrower</a></li>
            <li><a href="return.php"><i class="fa fa-undo"></i> Returns</a></li>
            <li><a href="user.php"><i class="fa fa-people"></i> Users</a></li>
            <li><a href="#"><i class="fa fa-clipboard"></i> Inventory</a></li>
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
                                <th>Quantity No.</th>
                                <th>Availability</th>
                                <th>Item No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                $itemNo = 1;
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td><img src='".$row['image']."' alt='item image' width='50'></td>";
                                    echo "<td>".$row['mode']."</td>";
                                    echo "<td>".$row['category']."</td>";
                                    echo "<td>".$row['brand']."</td>";
                                    echo "<td>".$row['quantity']."</td>";
                                    echo "<td>".$row['quantity_left']."</td>";
                                    echo "<td>".($row['can_borrow'] ? 'Yes' : 'No')."</td>";
                                    echo "<td class='text-center'>".$itemNo."</td>";
                                    echo "</tr>";
                                    $itemNo++;
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

    <script>
        const toggleDarkMode = document.getElementById('toggle-dark-mode');
        const darkModeIcon = document.getElementById('dark-mode-icon');
        const toggleBtn = document.getElementById('toggleBtn');
        
        toggleDarkMode.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            const isDarkMode = document.body.classList.contains('dark-mode');
            toggleDarkMode.innerHTML = isDarkMode ? '<i class="fa fa-sun-o" id="dark-mode-icon"></i> Light Mode' : '<i class="fa fa-moon-o" id="dark-mode-icon"></i> Dark Mode';
        });

        toggleBtn.addEventListener('click', () => {
            alert('Happy Using ');
        });
    </script>
</body>
</html>

<?php
$conn->close();
?>
