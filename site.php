<!DOCTYPE html>
<html>
<head>
</head>
<body>

<br>
<form action="site.php" method="post">
num1: <input type="text" name="num1" ><br>
OP: <input type="textbox" name="op" ><br>
num2: <input type="text" name="num2" ><br>
<input type="submit">
</form>
<?php  
function q($ww){
    echo "!!!!!!!$ww<br>";
}
q("efewfew");
function cube($ww){
    return $ww*$ww*$ww;
}
echo cube(3.323);
?>

</form>
</body>
</html>