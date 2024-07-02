<!DOCTYPE html>
<html>
<head>
  <title>Discussion - News Website</title>
  <link rel="stylesheet" type="text/css" href="../view/add_news.css">
</head>
<body>
  <div class="add-news-container">
    <div class="add-news-form">
         </br>
      </br>
      </br>
      </br>
      </br>
      </br>
       </br>
    
      <h2>Add News to Discussion</h2>
      <form method="POST" action="../controller/add_news.php" >
        <div class="input-group">
          <label for="title">Title</label>
          <input type="text" id="title" placeholder="Enter news title" name="title" required>
        </div>
        <div class="input-group">
          <label for="content">Discription</label>
          <textarea id="content" rows="6" placeholder="Enter news content" name="discription" required></textarea>
        </div>
        <div class="input-group">
          <label for="author">Author</label>
          <input type="text" id="author" placeholder="Enter author's name" name="author" required>
        </div>
        <div class="input-group">
          <label for="image">Image</label>
          <input type="file" id="image" accept="image/*" name="image" required>
        </div>
        <div class="input-group">
          <label for="category">Category</label>
          <div class="custom-dropdown">
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
                        $selectedProduct[] = $row['category'];
                    }
                }

                echo "<select name='category' id='nb' class='textbox3'>";
                foreach ($selectedProduct as $optionName) {
                    echo "<option value=" . $optionName . ">" . $optionName . "</option>";
                }
                echo "</select>";
                ?>
            <div class="arrow"></div>
          </div>
        </div>
        <div class="input-group">
          <label for="tags">Tags</label>
          <input type="text" id="tags" placeholder="Enter tags (comma-separated)" name="tags" required>
        </div>
        <button type="submit">Add News</button>
      </form>
    </div>
  </div>
  
  <div class="news-container">
    <!-- News Cards Will Be Displayed Here -->
  </div>
</body>
</html>
