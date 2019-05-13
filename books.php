<?

if (! mysql_connect("localhost","root","12345678"))
	die("無法連線資料庫伺服器，請聯絡系統管理員");

mysql_query ("SET NAMES utf8");

if(!mysql_select_db('ch09'))
	die(" 無法使用資料庫");

$sql="select * from books";

$result=mysql_query($sql);
	
echo "請問現在有幾筆資料:";

$row=mysql_num_rows($result);

echo $row;

echo "<br>";

echo "<table width=100% border=2 align=center cellpadding=0 cellspacing=0>";
echo "<tr>
	<td>書籍編號</td>
	<td>書籍名稱</td>
	<td>價錢</td>
	<td>負責員工編號</td>
	</tr>";

	while($row=mysql_fetch_array($result))
	{
echo"<tr>
	<td align='center' valign='center'><font color=blue>$row[0]</td>
	<td align='center' valign='center'><font color=red>$row[1]</td>
	<td align='center' valign='center'><font color=green>$row[2]</td>
	<td align='center' valign='center'><font color=blue>$row[3]</td>
	</tr>";
		
	}
	
/*while($row=mysql_fetch_array($result))
{
echo "書籍編號<br>";
echo $row[0];
echo "<br>";
echo "書籍名稱<br>";
echo $row[1];
echo "<br>";
echo "價錢<br>";
echo $row[2];
echo "<br>";

echo "員工編號<br>======================<br>";
echo $row[3];
echo "<br>";
}*/

?>