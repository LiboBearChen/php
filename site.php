<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="site.php" method="post">
apples: <input type="checkbox" name="fruits[]" value="apples"><br>
wqd: <input type="checkbox" name="fruits[]" value="wqd"><br>
trg: <input type="checkbox" name="fruits[]" value="trg"><br>
<input type="submit">
</form>
<br>
<form action="site.php" method="post">
name: <input type="text" name="student" ><br>
<input type="submit">
</form>
<?php  
$q=$_POST["fruits"];
echo $q[0];
$w=array("q"=>"dqw","w"=>"few");
echo $w["q"];
echo $w[$_POST["student"]];
?>

</form>
</body>
</html>