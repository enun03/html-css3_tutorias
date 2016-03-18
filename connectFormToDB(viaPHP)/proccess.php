<?php include 'database.php'; ?>
 
<?php
 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];
 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO employees1 (first_name,last_name,department,email)
         VALUES ('$first_name','$last_name','$department','$email')");
 
 if(mysqli_affected_rows($connect) > 0){
    header('Location: https://html5-css3-tutorias-enun03.c9users.io/connectFormToDB(viaPHP)/addEmployee.php'); // Redirecting To Other Page
    exit();
} else {
 echo "Employee NOT Added<br />";
 echo mysqli_error ($connect);
}