<!DOCTYPE html>
<html>
<head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    h1 {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
        margin: 0;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    /* Style for news titles */
    .news-title {
        color: #333;
        font-size: 18px;
    }
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Dashboard</title>
<link rel="stylesheet" type="text/css" href="../view/admin.css">
</head>
<body>
<div class="admin-container">
    <nav class="sidebar">
        <!-- Your existing sidebar code here -->
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
                <a href="authors.php">Users</a>
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
            <a href="controller/logout.php" class="logout">Logout</a>
        </header>
        <div class="main-content">
            <!-- Author table code here -->
            <?php
            // Database connection
            $l = "localhost";
            $r = "root";
            $p = "";
            $d = "discussion";
            $conn = mysqli_connect($l, $r, $p, $d);

            // Check the connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // SQL query to retrieve the number of news articles added by each user
            $sql = "SELECT author, COUNT(*) as news_count FROM news GROUP BY author";

            // Execute the query
            $result = mysqli_query($conn, $sql);

            // Initialize a serial number
            $serial = 1;

            // Check if there are rows in the result
            if (mysqli_num_rows($result) > 0) {
                // Create a table to display the data
                echo "<table>
                        <tr>
                            <th>Serial No.</th>
                            <th>Author</th>
                            <th>Number of News Articles</th>
                        </tr>";

                // Loop through the data and display it in the table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $serial . "</td>";
                    echo "<td>" . $row['author'] . "</td>";
                    echo "<td>" . $row['news_count'] . "</td>";
                    echo "</tr>";

                    // Increment the serial number
                    $serial++;
                }

                echo "</table>";
            } else {
                echo "No records found.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </main>
</div>
</body>
</html>
