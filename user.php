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
    <title>User Table</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
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
            <li><a href="#"><i class="fa fa-people"></i> Users</a></li>
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
                  
<h2>User Table</h2>

<table>
    <thead>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Student ID</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Daza</td>
            <td>20-00884</td>
            <td>Admin</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Kate</td>
            <td>22-89590</td>
            <td>Borrower</td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>
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
