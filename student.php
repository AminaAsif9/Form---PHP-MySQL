<?php

if(isset($_POST['name']))
{

$con = mysqli_connect('localhost','root','','db_student');

// get the post records

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtAddress = $_POST['address'];

$sql = "INSERT INTO student_record ( name, email, phone, address) 
        VALUES                     ('$txtName', '$txtEmail', '$txtPhone','$txtAddress')";

// insert in database 
$rs = mysqli_query($con, $sql);


if($rs)
{
	echo "Inserted Successfully! ";
	
	echo "<a href='contact-view.php'>View Data</a>"; 
	
	
}else{
    "not inserted";
}

} 

else {
	echo "Are you a genuine visitor?";	
}
?>