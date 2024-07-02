<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../view/admin.css"/>
    <link rel="stylesheet" type="text/css" href="../view/manage_news.css"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage News</title>
</head>
<body>

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
    echo "<iframe>";
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
         echo "</iframe>";
    ?>

</body>
</html>