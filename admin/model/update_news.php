<!DOCTYPE html>
<html>
<head>
  <title>Discussion - News Website</title>
  <link rel="stylesheet" type="text/css" href="../view/update_news.css">
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
    
<?php
$l="localhost";
$r="root";
$p="";
$d="discussion";

$link=mysqli_connect($l,$r,$p,$d);

$id=$_GET['id'];

   $s="select * from news where id='$id'";
   $q=mysqli_query($link,$s);
   while($row=mysqli_fetch_array($q)){
      $id=$row['id'];
      $title=$row['title'];
      $discription=$row['discription'];
            $author=$row['author'];
            $image=$row['image'];
            $category=$row['category'];
            $tags=$row['tags'];
           

      }
      ?>





      <h2>Add News to Discussion</h2>
      <form method="POST" action="../controller/update_news.php" >
        
          <input type="hidden" name="id" value="<?php echo $id ; ?>">
          
        <div class="input-group">
          <label for="title">Title</label>
          <input type="text"  id="title" value="<?php echo $title; ?>" placeholder="Update news title" name="title" required>
        </div>
        <div class="input-group">
          <label for="content">Discription</label>
          <input type="text" id="content" rows="6" value="<?php echo $discription; ?>" placeholder="Update news content" name="discription" required></textarea>
        </div>
        <div class="input-group">
          <label for="author">Author</label>
          <input type="text" id="author"  value="<?php echo $author; ?>" placeholder="Update author's name" name="author" required>
        </div>
        <div class="input-group">
          <label for="image">Image</label>
          <input type="file" id="image" value="<?php echo $image; ?>" accept="image/*" name="image" required>
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
 
                echo "<select  id='category' name='category' value=' <?php echo $category; ?>' 'required' id='nb' class='textbox3'>";
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
          <input type="text" id="tags" value="<?php echo $tags; ?>" placeholder="Update tags (comma-separated)" name="tags" required>
        </div>
        <button type="submit">Update News</button>
      </form>
    </div>
  </div>
  
  <div class="news-container">
    <!-- News Cards Will Be Displayed Here -->
  </div>
</body>
</html>
