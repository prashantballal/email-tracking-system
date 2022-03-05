<?php
//include_once('connection.php');
//error_reporting(1);
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$dept = $_POST['txtDept'];
$pass = $_POST['txtPass'];
$gender = $_POST['txtGender'];
$dob = $_POST['txtDOB'];
$phone = $_POST['txtPhone'];

$hostname = 'localhost';
$username = 'root';
$password = 'sql11';
$dbname = 'mailserver';

$link = mysqli_connect($hostname, $username, $password, $dbname);
if (!$link) {
    echo 'Unable to connect' . mysqli_connect_error();
} else {
    //echo 'Connected successfully<br />';
    $sql = "insert into userinfo VALUES('$name', '$email', '$dept' , '$pass' , '$gender' , '$dob' , $phone)";

    if ($link->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        //echo "Error: " . $sql . "<br>" . $link->error;
    }

    $link->close();
//	header("Location: homepage.html");
    //mysql_close($link);
}


//if($_POST['reg'])
//{
//	if($_POST['un']=="" || $_POST['pwd']=="")
//	{
//	$err="fill your user name first";
//	}
//	else
//	{
//	$r=mysql_query("SELECT * FROM userinfo where user_name='{$_POST['un']}'");
//	$t=mysql_num_rows($r);
//		if($t==1)
//		{
//		$err="user aleready exists choose another";
//		}
//		else
//		{
//		mysql_query("INSERT INTO userinfo values('','{$_POST['un']}','{$_POST['pwd']}','{$_POST['mob']}','{$_POST['eid']}','{$_POST['gen']}','$hobbies','$dob',
//		'$imgpath')");
//		mkdir("userImages/$un");
//		move_uploaded_file($_FILES["file"]["tmp_name"], "userImages/$un/" . $_FILES["file"]["name"]);
//		$_SESSION['sname']=$_POST['un'];
//		//header('location:index.php?chk=5');
//		echo "<script>window.location='index.php?chk=5'</script>";
//		}
//	}
//}
?>
<style>

    table{padding:2px;border-radius:5px}
    td{padding:10px}
    .aaa{width: 250px}
</style>
<style>
* {
    box-sizing: border-box;
}

input[type=text],input[type=email],input[type=password],input[type=date],input[type=tel], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
<form method="post" enctype="multipart/form-data">

    <center>
        <h2>Register Here</h2>
    </center>
    <div style="background: #999999; width: 600px; margin: auto">
        <br>
        <table align="center">
            <font color="#FF0000"><?php echo $err; ?></font>
            <tr>
                <td width="204" height="47">Name: </td>
                <td width="218"><input type="text" name="txtName" class="aaa" placeholder="Enter Name"/></td>
            </tr>
            <tr>
                <td height="39">Email Id: </td>
                <td><input type="email" name="txtEmail" class="aaa" placeholder="abc@xyz.com" required/></td>
            </tr>
            <tr>
                <td height="47">Department: </td>
                <td>
                    <select name="txtDept" class="aaa">
                        <option value="Select">Select</option>
                        <option value="Software">Administration</option>
                        <option value="Hardware">IT Department</option>
                        <option value="Software">Engineering</option>
                        <option value="Hardware">Finished good/store</option>
                        <option value="Software">Agriculture</option>
                        <option value="Hardware">Purchase</option>
                        <option value="Software">Sales</option>
                        <option value="Hardware">Harvesting and Distribution</option>
                        <option value="Software">Accounting</option>
                        <option value="Hardware">Time Office</option>
                        <option value="Software">Manufacturing/Production</option>
                        <option value="Hardware">General Depratment</option>
                        <option value="Software">Share Department</option>
                        <option value="Hardware">Sugercane Development</option>
                        <option value="Software">soil leboratory</option>
                        <option value="Hardware">petrol Pump</option>
                        <option value="Software">Distillery</option>
                        <option value="Hardware">weigh Bridge</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td height="39">Enter Password: </td>
                <td><input type="password" name="txtPass" class="aaa" placeholder="******"/></td>
            </tr>
            <tr>
                <td height="39">Re - Enter Password: </td>
                <td><input type="password" name="txtPass2" class="aaa" placeholder="******"/></td>
            </tr>
          <!--  <tr>
                <td height="33">Re-Enter Password: </td>
              <td><input type="password" name="txtPass"/></td>
            </tr>-->
            <tr>
                <td height="41">Gender: </td>
                <td>
                    <select name="txtGender" class="aaa">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td height="38">Date of Birth: </td>
                <td>
                    <input type="date" name="txtDOB" class="aaa">
                </td>
            </tr>
            <tr>
                <td height="55">Phone Number:</td>
                <td>
                    <input type="tel" name="txtPhone" class="aaa"
                           pattern="[0-9]{10}" placeholder="1234567890"
                           required/>
                </td>
            </tr>
          <!--  <tr>
              <td height="36">Insert Your image</td>
              <td>
                  
                  </td>
            </tr>
            <tr>
              <td height="30">I accept term & condition</td>
              <td>
                  <input type="checkbox" name="checklist"/>
                  </td>
            </tr>-->
            <tr>
                <td></td>
                <td align="center" colspan="2">
                    <input type="submit" name="reg" value="Register" style="width: 100%"/>
                    <!--<input type="reset"  value="Reset"/>-->
                </td>
            </tr>
        </table>
        <br>
    </div>  
    <br>
</form>