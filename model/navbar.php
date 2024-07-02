<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/navbar.css">
    <title>Navbar</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.php">Discussion</a>
            </div>
            <ul class="nav-links">
                <li><a href="#">Breaking News</a></li>
                <li class="dropdown">
                    <a href="#">Categories</a>
                    <ul class="dropdown-content">
                        <?php
                        $l = "localhost";
                        $r = "root";
                        $p = "";
                        $d = "discussion";

                        $link = mysqli_connect($l, $r, $p, $d);

                        $sql = "SELECT * FROM news_category";
                        $result = mysqli_query($link, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<li><a href='index.php?category=" . urlencode($row['category']) . "'>" . $row['category'] . "</a></li>";
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="national_news.php">National News</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Search..." name="search" id="live-search-input">
                <div id="live-search-results"></div>
            </div>
            <div class="profile">
                <div class="profile-menu">
                    <a href="../controller/logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
