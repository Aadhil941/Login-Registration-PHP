<?php 

session_start();

$con = mysqli_connect('localhost','root','','userregestraion');

$name ="";
$pass ="";
$email="";
if(isset($_POST['register'])) {

$name =$_POST['user'];
$pass =$_POST['password'];
$email=$_POST['email'];
$password = md5($pass);

$u ="SELECT * FROM usertable WHERE name='$name'";
$e ="SELECT * FROM usertable WHERE email='$email'";

$result_u = mysqli_query($con, $u) or die(mysqli_error($con));
$result_e = mysqli_query($con, $e) or die(mysqli_error($con));

    if(mysqli_num_rows($result_u) >0 ) {
    	$name_error="Sorry! Username is already taken";
    }elseif (mysqli_num_rows($result_e) >0 ) {
    	
    	$email_error="Sorry! email is already taken";

    } else {
    	$results = "INSERT INTO usertable (name,password,email) VALUES ('$name','$password','$email')" ;
		$query_results= mysqli_query($con,$results) or die(mysqli_error($con));

        echo "<script> alert('Registraion Successful');window.location='login.php';</script>";
    exit();
		
    }


}




?>