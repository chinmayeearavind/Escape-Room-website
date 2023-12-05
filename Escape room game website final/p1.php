<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtPassword = $_POST['txtpassword'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`fldName`, `fldEmail`, `fldPhone`, `fldpw`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
 echo "Contact Records Inserted";
}

?>
