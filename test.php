<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 


echo "max value is"." ";
echo(max(2,4,6,8,10)."<br>");

echo "min value is"." ";
echo(min(2,4,6,8,10)."<br>"); 

echo "average value is"." ";
$values=array(2,4,6,8,10,11); 

$average=array_sum($values)/count($values); 

echo $average;

echo trim($average,"\t");

?>



</body>
</html>