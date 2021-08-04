<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("You are not connected:").mysqli_connect_error();
}

$nombre = $_POST("txtusername");
$pass = $_POST("txtpassword");

$query = nysqli_query ($conn, "SELECT * FROM login username = '".$name."' and password = '".$pass."'");

$nr = mysqli_num_rows($query);

if ($nr == 1)
{
    echo "Welcome : " .$name;
}
echo if ($nr == 0)
{
    header ("Location: login.html");
    echo "You are not registered";
}

?>