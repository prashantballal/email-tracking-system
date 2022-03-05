<h1 align="center">Sent</h1>
<?php
include_once('connection.php');

$id=$_SESSION['sid'];


$sql="SELECT * FROM usermail where sen_id='$id'";
$dd=mysql_query($sql);

echo "<div style='margin-left:10px;width:640px;height:auto;border:2px; margin: auto'>";

	echo "<table border='1' width='500'>";
	echo "<tr><th>Receiver </th><th>Sender </th><th>Subject </th><th>Attachment </th><th>Date </th></tr>";
while(list($rid,$sid,$s,$m,$a,$d)=mysql_fetch_array($dd))
{
	echo "<tr>";
	echo "<form>";
//	echo "<td><input type='checkbox' name='ch[]' value='$mid'/></td>";
	echo "<td>".$rid."</td>";
//	echo "<td><a href='HomePage.php?consent=$mid'>".$s."</a></td>";
        echo "<td>".$s."</td>";
        echo "<td>".$m."</td>";
        echo "<td>".$a."</td>";
	echo "<td>".$d."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	
	
/*$ch=$_GET['ch'];
foreach($ch as $v)
{

}*/
	
echo "<input type='submit' value='Delete' name='delete'/>";
echo "</div>";
	
echo "</form>";

?>
