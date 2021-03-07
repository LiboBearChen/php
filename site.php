<!DOCTYPE html>
<html>
<head>
</head>
<body>

<br>
<form action="site.php" method="post">
num1: <input type="number" step="0.2" name="num1" ><br>
OP: <input type="text" name="op" ><br>
num2: <input type="number" name="num2" ><br>
<input type="submit">
</form>
<br>
<form action="site.php" method="post">
Grade: <input type="text" name="grade" ><br>
<input type="submit">
</form>
<?php  
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$op=$_POST["op"];
if($op=="+"){
    echo $num1+$num2;
}elseif ($op=="-") {
    echo $num1-$num2;
}
$grade=$_POST["grade"];
switch($grade){
    case "q":
        echo "ewfwef";
        break;
    case "w":
        echo "dwfrfrf";
        break;
    default:
        echo "fsegegee";
        break;
}
?>

</form>
</body>
</html>