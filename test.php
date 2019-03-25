<table width = 100 border="1">
<?php
$i = 1;
$a = "*";
while ($i <= 50)
{
	echo "<tr>
	<td bgcolor=#00FFFF> $a</td>
	</tr>";
	$a = $a.'*';
	$i = $i + 1;
}
?>
</table>
