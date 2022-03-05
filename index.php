<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>My mail server</title>
        <script language="JavaScript1.1">
<!--

            /*
             JavaScript Image slideshow:
             By JavaScript Kit (www.javascriptkit.com)
             Over 200+ free JavaScript here!
             */

            var slideimages = new Array()
            var slidelinks = new Array()
            function slideshowimages() {
                for (i = 0; i < slideshowimages.arguments.length; i++) {
                    slideimages[i] = new Image()
                    slideimages[i].src = slideshowimages.arguments[i]
                }
            }

            function slideshowlinks() {
                for (i = 0; i < slideshowlinks.arguments.length; i++)
                    slidelinks[i] = slideshowlinks.arguments[i]
            }

            function gotoshow() {
                if (!window.winslide || winslide.closed)
                    winslide = window.open(slidelinks[whichlink])
                else
                    winslide.location = slidelinks[whichlink]
                winslide.focus()
            }

            //-->
        </script>
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

            input[type=text], select, textarea {
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
    </head>

    <body background="images/homebg.jpg">

        <table width="95%" border="1" align="center" style="background-image:url('image/homebg.jpg');">
            <tr>
                <td>

                    <img src="images/pk.jpg" name="slide" border="0" width="100%" height="300">
                </td>
            </tr>
            <tr>
                <center>   
                    <td height="38" colspan="2" style="background-color: black;">
                        <a style="color: white;" href="index.php">Home</a>
                        <!--<a href="index.php?chk=about">About Us</a>-->
                        <a style="color: white;" href="index.php?chk=registraion">Register</a>
                        <a style="color: white;" href="index.php?chk=login">Login</a>

                        <!--<a href="index.php?chk=5"></a>-->
                        <!--<a href="index.php?chk=contact">Contact Us</a>-->	
                    </td>
                </center>
            </tr>
            <tr>
                <td height="613" valign="top" style="padding:10px">

                    <?php
                    @$chk = $_REQUEST['chk'];
                    if ($chk == "") {
                        ?>
                        <h3 align="center">Welcome to My mail server</h3>
                        <pre align="center">
        	
        My mail server

        Can chat with a friend, or give someone a ring all from your inbox. 
        See more reasons to switch or check out our newest features. 
        	
        	
        	
                        </pre>
                        <?php
                    }
                    if ($chk == "registraion") {
                        include_once('regis.php');
                    }
                    if ($chk == "login") {
                        include_once('login.php');
                    }
                    if ($chk == 5) {
                        include_once('welcome.php');
                    }
                    if ($chk == "about") {
                        include_once('aboutus.php');
                    }
                    if ($chk == "contact") {
                        include_once('contactus.php');
                    }
                    if ($chk == "7") {
                        include_once('latestupdDisp.php');
                    }
                    if ($chk == "about") {
                        include_once('about.php');
                    }
                    ?>	</td>
        <!--    <td width="130">
                <marquee direction="up" behavior="alternate" onmouseover="stop()" onmouseout="start()">
        <a href="index.php?chk=7">Latest Updates</a></marquee>
                </td>-->
            </tr>

        </table>

    </body>
</html>
