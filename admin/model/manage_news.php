<!DOCTYPE html>
<html>
<head>
    <title>Manage News-Discussion</title>
    <link rel="stylesheet" type="text/css" href="../view/admin.css"/>
    <link rel="stylesheet" type="text/css" href="../view/manage_news.css"/>
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
                
                <a href="../controller/logout.php" class="logout">Logout</a>
            </header>
            <div class="main-content">
                

                </br>
 <?php
    $l = "localhost";
    $r = "root";
    $p = "";
    $d = "discussion";

    $m = mysqli_connect($l, $r, $p, $d);

    $q = "select * from news";
    $q2 = "select count(id) from news";
    $n = mysqli_query($m, $q);
    $n2 = mysqli_query($m, $q2);

    echo "<table id='table'>";
    echo "<tr>";
    echo "<th>" . "Sr.No" . "</th>";
    echo "<th>" . "Title" . "</th>";
    echo "<th>" . "Description" . "</th>";
    echo "<th>" . "Author" . "</th>";
    echo "<th>" . "Image" . "</th>";
    echo "<th>" . "Category" . "</th>";
    echo "<th>" . "Tags" . "</th>";
    echo "<th>" . "Update News" . "</th>";
    echo "<th>" . "Delete News" . "</th>";
    echo "</tr>";

    $r = 1;
    while ($o = mysqli_fetch_array($n)) {
        $id = $o['id'];

        echo "<tr>";
        echo "<td>" . $r . "</td>";
        echo "<td>" . $o['title'] . "</td>";
        echo "<td>" . $o['discription'] . "</td>";
        echo "<td>" . $o['author'] . "</td>";
        echo "<td>" . $o['image'] . "</td>";
        echo "<td>" . $o['category'] . "</td>";
        echo "<td>" . $o['tags'] . "</td>";

        echo "<td>" . "<a href='update_news.php?id=$id'><input type='submit' class='update' value='Update'/></a>" . "</td>";
        echo "<td>" . "<a href='../controller/delete_news.php?id=$id'><input type='submit' class='delete' value='Delete'/></a>" . "</td>";
        echo "</tr>";
        $r++;
    }
    echo "</table>";
    ?>
<br><br>




            </div>
        </main>
    </div>
</body>
</html>
