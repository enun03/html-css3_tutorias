<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header('Location: https://html5-css3-tutorias-enun03.c9users.io/connectFormToDB(viaPHP)/index.php'); // Redirecting To Home Page
exit();
}
?>