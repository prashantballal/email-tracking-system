<?php
$hostname = 'localhost';
$username = 'root';
$password = 'sql11';
$dbname='mailserver';

$link = mysqli_connect($hostname, $username, $password, $dbname);

if(!$link)
{
	echo 'Unable to connect'.mysqli_connect_error();
    
}
?>