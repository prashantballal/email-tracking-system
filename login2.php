<?php
error_reporting(1);
include_once('connection.php');

$id=$_POST['txtId'];
$pass=$_POST['txtPass'];

//$hostname = 'localhost';
//$username = 'root';
//$password = 'sql11';
//$dbname='mailserver';
//
//$link = mysqli_connect($hostname, $username, $password, $dbname);
//if(!$link)
//{
//	echo 'Unable to connect'.mysqli_connect_error();
//    
//}
//else
//{
    //echo 'success';
    if($_POST['txtId']=="" || $_POST['txtPass']=="")
	{
	$err="fill your id and password first";
	}
	else
	{
            echo $id;
            echo $pass;
	$d=mysqli_query("SELECT * FROM userinfo where email_id = '$id' and password = '$pass'");
        
	$row=mysqli_fetch_object($d);
        
		$fid=$row->email_id;
                echo $fid;
		$fpass=$row->password;
		if($fid==$_POST['txtId'] && $fpass==$_POST['txtPass'])
		{
                    echo 'success';    
                    
//		$_SESSION['sid']=$_POST['id'];
//		header('location:HomePage.php');
//		echo "<script>window.location='HomePage.php'</script>";
		}
		else
		{
		$err="invalid id or pass";
		}
	//}
    
    
    
    
    
//	$sql = "SELECT id FROM userinfo WHERE email_id = '$id' and password = '$pass'";
//      $result = mysqli_query($link,$sql);
//      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['active'];
//      
//      $count = mysqli_num_rows($result);
//      
//      // If result matched $myusername and $mypassword, table row must be 1 row
//		
//      if($count == 1) {
////         session_register("myusername");
////         $_SESSION['login_user'] = $myusername;
//         
//         header("location: index.php");
//      }else {
//          //echo 'error'; 
//      }
}
mysqli_close($link);

//if(isset($_POST['signIn']))
//{
//	if($_POST['txtId']=="" || $_POST['txtPass']=="")
//	{
//	$err="fill your id and password first";
//	}
//	else
//	{
//	$d=mysqli_query("SELECT * FROM userinfo where email_id='{$_POST['txtId']}'");
//	$row=mysqli_fetch_object($d);
//		$fid=$row->email_id;
//		$fpass=$row->password;
//		if($fid==$_POST['txtId'] && $fpass==$_POST['txtPass'])
//		{
//		//$_SESSION['sid']=$_POST['id'];
//		//header('location:HomePage.php');
//		echo "<script>window.location='HomePage.php'</script>";
//		}
//		else
//		{
//		$err="invalid id or pass";
//		}
//	}
//}
?>
<form method="post">
<table width="90%" border="1" align="center">
  	<tr>
		<Td colspan="2" align="center"> <font color="#FF0000"><?php echo @$err; ?></font></Td>
	</tr>
  <tr>
    <th width="171" scope="row">Enter your id </th>
    <td width="136">
		<input type="text" name="txtId" />
	</td>
  </tr>
  <tr>
    <th scope="row">Enter your password </th>
    <td>
			<input type="password" name="txtPass"/>
	</td>
  </tr>
  <tr>
    <th colspan="2" scope="row">
	<input type="submit" value="SignIn" name="signIn"/>
	<a href="http://localhost/Mailserver/index.php?chk=4">SignUp</a>
	</th>
  </tr>
</table>
</form>