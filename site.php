<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php 
class Book{
    var $title;
    var $author;
    var $pages;

    function __construct(){
        echo "New book created <br>";
    }
}

$book1=new Book; 
$book1->title="ddqw";
$book1->pages=3243;

echo $book1->pages;
?>

</form>
</body>
</html>