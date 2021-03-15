<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php 
class Letter{

    function a(){
        echo "a<br>";
    }

    function b(){
        echo "b<br>";
    }

    function c(){
        echo "c<br>";
    }
}

class Letter1 extends Letter{
    function d(){
        echo "d<br>";
    }
}

$l=new Letter();
$l->a();
$l1=new Letter1();
$l1->a();
$l1->d();
?>

</form>
</body>
</html>