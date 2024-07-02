<!DOCTYPE html>
<html>
<head>
    <title>Add Category-Discussion</title>
    <link rel="stylesheet" type="text/css" href="../view/add_category.css">
</head>
<body>
   </br> 
   </br>
   </br>
   </br>
   </br>

    <div class="container">
        <h1>Add Category</h1>
        <form class="category-form" method="POST" action="../controller/add_category.php">
            <label for="category-name">Category Name:</label>
            <input type="text" id="category-name"  placeholder="Enter category name" name="category" required>
            
            
            <input type="submit" value="Add Category">
        </form>
    </div>
</body>
</html>
