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

    function a(){
        if(($this->pages)>100){
            return "more";
        }
        return "less";
    }
}

$book1=new Book; 
$book1->title="ddqw";
$book1->pages=3243;
$book2=new Book;
$book2->pages=33;
echo $book1->pages;
echo "<br>";
echo $book2->pages;
echo "<br>";
echo $book1->a();
echo "<br>";
echo $book2->a();
?>

</form>
</body>
</html>