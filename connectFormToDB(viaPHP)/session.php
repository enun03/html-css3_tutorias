<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "enun03", "");
// Selecting Database
$db = mysql_select_db("c9", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: https://html5-css3-tutorias-enun03.c9users.io/connectFormToDB(viaPHP)/index.php'); // Redirecting To Home Page
exit();
}
?>