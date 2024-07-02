<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../view/cards.css">
    <link rel="stylesheet" type="text/css" href="../view/marquee.css">
    <title>Discussion</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
</head>

<body>

<?php
include('navbar.php');
include('marquee.php');
?>

<div class="news-container">
    <?php
    $l = "localhost";
    $r = "root";
    $p = "";
    $d = "discussion";
    $conn = mysqli_connect($l, $r, $p, $d);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if a category is selected in the URL
    $selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';

    // Build the SQL query based on the selected category
    $sql = "SELECT * FROM news ORDER BY id DESC";
if (!empty($selectedCategory)) {
    $escapedCategory = mysqli_real_escape_string($conn, $selectedCategory);
    $sql = "SELECT * FROM news WHERE category = '$escapedCategory' ORDER BY id DESC";
}

    try {
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            throw new Exception("Query execution failed: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <section class="main-content">
                    <div class="news-cards">
                        <div class="news-card">
                            <img src="<?php echo $row['image']; ?>" alt="News Image">
                            <div class="news-content">
                                <h2><?php echo $row['title']; ?></h2>
                                <p><?php echo $row['discription']; ?></p>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            }
        } else {
            echo "<p>No news found in this category.</p>";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        mysqli_close($conn);
    }
    ?>
</div>

<script>
$(document).ready(function(){
    const liveSearchInput = $('#live-search-input');
    const newsContainer = $('.news-container');

    liveSearchInput.on('input', function() {
        const searchTerm = liveSearchInput.val().trim();
        if (searchTerm.length === 0) {
            newsContainer.html(''); // Clear the news container if the search term is empty
            return;
        }

        // Send an AJAX request to search for news titles
        $.ajax({
            url: 'search.php',
            method: 'GET',
            data: { search: searchTerm },
            success: function(response) {
                // Update the news container with the search results
                newsContainer.html(response);
            }
        });
    });
});
</script>

<?php
include('footer.php');
?>
</body>
</html>
