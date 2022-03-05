<?php
error_reporting(1);
include_once('connection.php');
if (isset($_POST['signIn'])) {
    if ($_POST['id'] == "" || $_POST['pwd'] == "") {
        $err = "fill your id and passwrod first";
    } else {
        $d = mysql_query("SELECT * FROM userinfo where email_id='{$_POST['id']}'");
        $row = mysql_fetch_object($d);
        $fid = $row->email_id;
        $fpass = $row->password;
        if ($fid == $_POST['id'] && $fpass == $_POST['pwd']) {
            $_SESSION['sid'] = $_POST['id'];
            //header('location:HomePage.php');
            echo "<script>window.location='HomePage.php'</script>";
        } else {
            $err = "invalid id or pass";
        }
    }
}
?>
<style>
    a:hover{color:#00FF66;}
    a{font-size:18px;margin-left:5%;}
    table{padding:2px;border-radius:5px}
    td{padding:10px}
</style>
<style>
* {
    box-sizing: border-box;
}

input[type=text],input[type=password], select, textarea {
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
<form method="post">
    <br><br>
    <center>
        <h2>Login Here</h2>
    </center>
    <div style="background: #999999; width: 500px; margin: auto">
        <br>
        <table align="center">
        <!--  	<tr>
                        <Td colspan="2" align="center"> <font color="#FF0000"><?php echo @$err; ?></font></Td>
                </tr>-->
            <tr>
                <th width="171" scope="row">Email Id: </th>
                <td width="136">
                    <input type="text" name="id" placeholder="Enter Email Id" />
                </td>
            </tr>
            <tr>
                <th scope="row">Password: </th>
                <td>
                    <input type="password" name="pwd" placeholder="********"/>
                </td>
            </tr>
            <tr>
                <th></th>
                <th colspan="2" scope="row">
                    <input type="submit" value="SignIn" name="signIn"/>
                    <!--	<a href="http://localhost/Mailserver_updated_new/regis.php">SignUp</a>
                            </th>-->
            </tr>
        </table>
        <br>
    </div>  
</form>