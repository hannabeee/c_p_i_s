<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrower Dashboard</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Additional styles */
        .text-center {
            text-align: center;
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
                <div class="borrower_table">
                    <h2>Borrower</h2>
                    <table id="borrower-table">
                        <thead>
                            <tr>
                                <th>Borrower ID</th>
                                <th>Name</th>
                                <th>Student Id</th>
                                <th>Items Borrowed</th>
                
                            </tr>
                        </thead>
                        <tr>
            <td>1</td>
            <td>Daza</td>
            <td>20-00884</td>
            <td>Remote</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Kate</td>
            <td>20-089590</td>
            <td>Keyboard</td>
        </tr>
                        <tbody>
                            
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



   