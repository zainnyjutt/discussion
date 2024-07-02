<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sidebar</title>

	<link rel="stylesheet" type="text/css" href="view/admin.css">
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
                       
                        <li><a href="model/add_news.php" target="add_news">Add News</a></li>
                        <li><a href="model/manage_news.php">Manage News</a></li>
                        
                    </ul>
                </li>
                <li class="menu-item has-submenu">
                    <a href="#">Categories</a>
                    <ul class="submenu">
                        <li><a href="model/add_category.php">Add Category</a></li>
                        <li><a href="model/manage_categories.php">Manage Categories</a></li>
                    </ul>
                </li>
                <li class="menu-item has-submenu">
                    <a href="#">Layouts</a>
                    <ul class="submenu">
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">Category Pages</a></li>
                    </ul>
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


                
            </div>
        </main>
    </div>


</body>
</html>