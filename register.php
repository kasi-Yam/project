

<?php
mysqli_connect('localhost','database_user','database_password','database');
$con =mysqli_connect('localhost','root','','db_registration');

$firstname= $_POST['firstname'];
$lastname=$_POST['lastname'];
$ID=$_POST['ID'];
$contact=$_POST['contact'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];

$sql ="INSERT INTO 'tbl_login'
('firstname','lastname','ID','contact','Email','Password') value
('firstname','lastname';'0','contact','Email','Password')";

$rs = mysqli_query($con,$sql);
 if($rs)
 {
     echo"data inserted";
 }
?>
