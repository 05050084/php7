<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>array.php</title>
</head>
<body>
<?php 
$i = 1;
$j = 1;
// 指定陣列元素
while ($i <= 9){
$a[$i] = $i;
echo "a[$i]=";
echo "$a[$i]<br>";
$i = $i + 1;
}
echo "After Shift</br>";
for($i = 1;$i <=9;$i=$i+1)
{
	$a[$i] = $a[$i+1];
	echo "a[$i]=";
	echo "$a[$i]<br>";
}
?>
</body>
</html>
