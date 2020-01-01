<?php 
$con = mysqli_connect('localhost','root','','userregestraion');


if(isset($_POST['login'])) {


$name =$_POST['user'];
$pass =$_POST['password'];
$password = md5($pass);

$S ="SELECT * FROM usertable WHERE name='$name' && password='$password' ";
$u ="SELECT * FROM usertable WHERE name='$name' ";
$result = mysqli_query($con, $S);
$result_u=mysqli_query($con,$u);


    if(mysqli_num_rows($result)==1 ) {
    	$_SESSION['user'] = $name;
		header('location:home.php');
   

    } elseif(mysqli_num_rows($result_u)>0) {
    	$pass_error="Invalid Password";
   
	
    }else {
    	$login_error="Invalid Username or Password ";
   
    }


}



?>