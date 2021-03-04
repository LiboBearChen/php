<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="site.php" method="get">
Name:<input type="text" name="name">
<input type="submit">
<?php  
echo $_GET["name"]
?>
<br>
<form action="site.php" method="get">
Num1:<input type="number" name="num1">
<br>
Num2:<input type="number" name="num2">
<input type="submit">
<br>
<?php  
echo $_GET["num1"]+$_GET["num2"]
?>
</form>
</body>
</html>