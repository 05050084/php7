<?
if ( ! mysql_connect("localhost", "root", "12345678") )
  die("無法連線資料庫伺服器, 請聯絡系統管理員蕭志明");
//設定連線的文字集與校對為 UTF8 編碼
mysql_query("SET NAMES utf8");
if ( ! mysql_select_db('ch09') )
  die("無法使用資料庫");
?>

<h1> 書籍資料管理系統</h1>
=============================================輸入查詢書本編號======================================================
<br>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body><form name="form1" method="get" action="books.php">
輸入查詢書本編號

<?
//<input type="text" name="bookon" maxlength="6" size ="8"><br>
$sql="select * from books";
$result =mysql_query($sql);
?>

<select name ="bookon" size="1">

<?
while ($row=mysql_fetch_array($result))
{
	echo "<option value=$row[0] >$row[0]";
}
?>
</option>
</select>
<br>
<input type="submit" value="查詢">
<input type="reset" value="重設">
</form>
</body>
<html>
<?
$bookon=$_GET['bookon'];
if($_GET['bookon'])
{
$sql="select books.書籍編號,books.書籍名稱,books.價格,employee.姓名 from books inner join  employee on books.負責員工編號=employee.員工編號 where books.書籍編號 = $bookon";
//$sql="select * from books where books.書籍編號=from1.text"
$result=mysql_query($sql) ;
echo "目前有幾筆資料：";
echo mysql_num_rows($result);
//<td align=center valign=center>負責員工編號</td>
echo "<br>";
echo "<table   height=80 border=10>";
echo "<tr >
    <td align=center valign=center>書籍編號</td>
    <td align=center valign=center>書籍名稱</td>
    <td align=center valign=center>書籍價格</td>
	<td align=center valign=center>負責員工姓名</td>
  </tr>";
while ($row=mysql_fetch_array($result))
{
	
echo "<tr >
    <td align=center valign=center> <font color=blue >$row[0]</font></td>
    <td align=center valign=center><font color=red >$row[1]</font></td>
    <td align=center valign=center><font color=purple>$row[2]</font></td>
    <td align=center valign=center><font color=green >$row[3]</font></td>
  </tr>";
}
/*echo "<tr >
    <td align=center valign=center> <font color=blue >$row[0]</font></td>
  </tr>";
}
}*/
 echo "</table>";
 }
?>

<br>
<br>
===========================================輸入查詢書本名稱==================================================
<br>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body><form name="form1" method="get" action="books.php">
輸入查詢書本名稱
<input type="text" name="bookna" maxlength="20" size ="20"><br>

<br>
<input type="submit" value="查詢">
<input type="reset" value="重設">
</form>
</body>
<html>

<?
$bookna=$_GET['bookna'];
$sql="select books.書籍編號,books.書籍名稱,books.價格,employee.姓名 from books inner join  employee on books.負責員工編號=employee.員工編號 where books.書籍名稱 like '%$bookna%'";
//echo $sql;
echo "<br>";
$result=mysql_query($sql) ;
echo "目前有幾筆資料：";
echo mysql_num_rows($result);
//<td align=center valign=center>負責員工編號</td>
echo "<br>";
echo "<table   height=80 border=10>";
echo "<tr >
    <td align=center valign=center>書籍編號</td>
    <td align=center valign=center>書籍名稱</td>
    <td align=center valign=center>書籍價格</td>
	<td align=center valign=center>負責員工姓名</td>
  </tr>";
while ($row=mysql_fetch_array($result))
{
	
{
echo "<tr >
    <td align=center valign=center> <font color=blue >$row[0]</font></td>
    <td align=center valign=center><font color=red >$row[1]</font></td>
    <td align=center valign=center><font color=purple>$row[2]</font></td>
    <td align=center valign=center><font color=green >$row[3]</font></td>
  </tr>";
}
}
/*echo "<tr >
    <td align=center valign=center> <font color=blue >$row[0]</font></td>
  </tr>";
}
}*/
 echo "</table>";
 
?>

============================================刪除書本===========================================================
<br>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body><form name="form1" method="get" action="books.php">
輸入查詢書本編號

<?
//<input type="text" name="bookon" maxlength="6" size ="8"><br>
$sql="select * from books";
$result =mysql_query($sql);
?>

<select name ="bookno1" size="1">

<?
while ($row=mysql_fetch_array($result))
{
	echo "<option value=$row[0] >$row[0]";
}
?>
</option>
</select>
<br>
<input type="submit">
<input type="reset">
</form>
</body>
<html>

<?
$bookno1=$_GET['bookno1'];
$sql="delete from books where 書籍編號= $bookno1";
$result=mysql_query($sql);

echo "你已刪除書籍編號$bookno1" ;
?>
<br>
<br>
=============================================用網頁刪除書本======================================================

<?
if($_GET['del'])
{
$dele=$_GET['del'];
$sql="delete from books where 書籍編號=$dele";
$result=mysql_query($sql);

echo "你已刪除書籍編號 $dele" ;
}
$sql="select books.書籍編號,books.書籍名稱,books.價格,employee.姓名 from books inner join  employee on books.負責員工編號=employee.員工編號";
//echo $sql;
echo "<br>";
$result=mysql_query($sql) ;
echo "目前有幾筆資料：";
echo mysql_num_rows($result);
//<td align=center valign=center>負責員工編號</td>
echo "<br>";
echo "<table   height=80 border=10>";
echo "<tr >
    <td align=center valign=center>書籍編號</td>
    <td align=center valign=center>書籍名稱</td>
    <td align=center valign=center>書籍價格</td>
	<td align=center valign=center>負責員工姓名</td>
	<td align=center valign=center>選擇刪除資料</td>
  </tr>";
 $rel=0;
while ($row=mysql_fetch_array($result))
{
	
{
echo "<tr >
    <td align=center valign=center> <font color=blue >$row[0]</font></td>
    <td align=center valign=center><font color=red >$row[1]</font></td>
    <td align=center valign=center><font color=purple>$row[2]</font></td>
    <td align=center valign=center><font color=green >$row[3]</font></td>
	<td align=center valign=center><a href=books.php?del=$row[0]>刪除</a></td>
  </tr>";
}
}
/*echo "<tr >
    <td align=center valign=center> <font color=blue >$row[0]</font></td>
  </tr>";
}
}*/
 echo "</table>";
	

 
 
?>














