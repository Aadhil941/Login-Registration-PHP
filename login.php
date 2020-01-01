<?php include ('Registration.php'); ?>
<?php include ('validation.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login and Registration</title>
	<meta name="aadhil" content="width=device-width, initial-scale=1.0 ">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2> Login Here </h2>
				<form action="login.php" method="post">
					<div class="form-group">
						
							<label>Username</label>					
						<div 

							<?php if(isset($login_error)) : ?>

							class="name_error" 
							<?php endif ?> >
							<input type="text" name="user" class="form-control" value="<?php echo $name; ?>" required>

						</div>					
					
				</div>
					
					<div class="form-group">

						
						<label>Password</label><div 

						<?php if (isset($login_error)  || isset($pass_error)) : ?>

						class="name_error" 
						<?php endif ?> >
						

						<input type="password" name="password" class="form-control" required><div>
						<?php if(isset($login_error)): ?>
							<span><?php echo $login_error; ?></span>
						<?php elseif(isset($pass_error)): ?>
							<span><?php echo $pass_error; ?></span>
	
						<?php endif ?> </div>

					</div>
					</div>
					
					<button type="submit" class="btn-primary" id="button1" name="login"> Login</button>


				</form>
			</div>	
					
			<div class="col-md-6 login-right">
				<h2> Register Here </h2>
				<form action="login.php" method="post">
					<div class="form-group">
						
							<label>Username</label>
						<div 

							<?php if (isset($name_error)): ?>

							class="name_error" 
							<?php endif ?> >
			
						
							<input type="text" name="user" class="form-control" value="<?php echo $name; ?>" required><div >
							<?php if(isset($name_error)): ?>
							<span><?php echo $name_error; ?></span>
							<?php endif ?> </div>
						
						</div>
					</div>

						<div class="form-group">
						
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">  						
						<label>Email</label><div  

						<?php if (isset($email_error)): ?>
						class="name_error" 						
						<?php endif ?> >
						<input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required> <div >
						<?php if(isset($email_error)): ?>
							<span><?php echo $email_error; ?></span>
						<?php endif ?> </div>
					</div>
					</div>
					<button type="submit" class="btn-primary" name="register"> Register</button>


				</form>
			</div>		


		</div>
		</div>

	</div>

</body>
</html>