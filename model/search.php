<?php
// Include your database connection code here
$l = "localhost";
$r = "root";
$p = "";
$d = "discussion";

$link = mysqli_connect($l, $r, $p, $d);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if search term is provided
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Perform a database query to search for news titles
    $sql = "SELECT * FROM news WHERE title LIKE '%$searchTerm%'";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Display the search results in the same format as news cards
            echo '<div class="news-card">';
            echo '<img src="' . $row['image'] . '" alt="News Image">';
            echo '<div class="news-content">';
            echo '<h2>' . $row['title'] . '</h2>';
            echo '<p>' . $row['discription'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No results found.</p>';
    }
}

mysqli_close($link);
?>
