<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="site.php" method="post">
<input type="checkbox" name="fruits[]">
<input type="submit">
</form>

<?php  
$q=array("ewew","few","wdwqad");
$q[14]=231;
echo $q[14];
echo count($q);
?>

</form>
</body>
</html>