<?
if ( ! mysql_connect("localhost", "root", "12345678") )
  die("無法連線資料庫伺服器, 請聯絡系統管理員蕭志明");
//設定連線的文字集與校對為 UTF8 編碼
mysql_query("SET NAMES utf8");

if ( ! mysql_select_db('ch09') )
  die("無法使用資料庫");


$sql="select books.書籍編號,books.書籍名稱,books.價格,employee.姓名 from books inner join  employee on books.負責員工編號=employee.員工編號";


$result=mysql_query($sql) ;

echo "目前有幾筆資料：";
echo mysql_num_rows($result);

echo "<br>";


echo "<table   height=80 border=10>";
echo "<tr >
    <td align=center valign=center>書籍編號</td>
    <td align=center valign=center>書籍名稱</td>
    <td align=center valign=center>書籍價格</td>
    <td align=center valign=center>負責員工編號</td>
	<td align=center valign=center>姓名</td>
  </tr>";


while ($row=mysql_fetch_array($result))
{


echo "<tr >
    <td align=center valign=center> <font color=blue >$row[0]</font></td>
    <td align=center valign=center><font color=red >$row[1]</font></td>
    <td align=center valign=center><font color=purple>$row[2]</font></td>
    <td align=center valign=center><font color=green >$row[3]</font></td>
	<td align=center valign=center><font color=yellow >$row[4]</font></td>
  </tr>";

}
 echo "</table>";
 
?>

