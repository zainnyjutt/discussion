<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/contact_us.css">
    <link rel="stylesheet" type="text/css" href="../view/admin.css"/>

    <title>Admin Dashboard</title>
</head>
<body>
    <div class="admin-container">
        <nav class="sidebar">
            <div class="user-info">
                    <img src="avatar.jpg" alt="User Avatar">
                    <span>Admin</span>
                </div>

            <div class="sidebar-header">
                <h2>Discussion Admin</h2>
            </div>
            <ul class="menu">
                <li class="menu-item">
                    <a href="../admin.php">Dashboard</a>
                </li>
                <li class="menu-item has-submenu">
                    <a href="#">News Management</a>
                    <ul class="submenu">
                       
                        <li><a href="add_news.php" target="add_news">Add News</a></li>
                        <li><a href="manage_news.php">Manage News</a></li>
                        
                    </ul>
                </li>
                <li class="menu-item has-submenu">
                    <a href="#">Categories</a>
                    <ul class="submenu">
                        <li><a href="add_category.php">Add Category</a></li>
                        <li><a href="manage_categories.php">Manage Categories</a></li>
                    </ul>
                </li>
                 <li class="menu-item has-submenu">
                    <a href="contact_us.php">Questions</a>
                   
                </li>
                <li class="menu-item">
                    <a href="#">Users</a>
                </li>
                <li class="menu-item">
                    <a href="#">Analytics</a>
                </li>
                <li class="menu-item">
                    <a href="#">Settings</a>
                </li>
            </ul>
        </nav>
        <main class="content">
            <header class="header">
                
                <a href="../controller/logout.php" class="logout">Logout</a>
            </header>
            <div class="main-content">
            </br>
            </br>
           
    
    <section class="messages">
        <h2>Contact Messages</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <!-- PHP code to fetch and display messages will go here -->
            <?php
            // Database connection
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "discussion";

            $connection = mysqli_connect($host, $username, $password, $database);

            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch contact messages from the database
            $query = "SELECT * FROM contact_us";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No messages found</td></tr>";
            }

            // Close the database connection
            mysqli_close($connection);
            ?>
        </table>
    </section>
   
</body>
</html>
