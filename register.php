<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    	<title>Register</title>
    </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 offset-md-4 mt-5">
    				<?php
    				if(isset($_SESSION['error'])) {
    				?>
    				<div class="alert alert-warning" role="alert">
    				  <?php echo $_SESSION['error']?>
    				</div>
    				<?php
    				}
    				?>
    				<?php
    				if(isset($_SESSION['message'])) {
    				?>
    				<div class="alert alert-success" role="alert">
    				  <?php echo $_SESSION['message']?>
    				</div>
    				<?php
    				}
    				?>
    				<div class="card ">
    					<div class="card-title text-center">
    						<h1>Register Form</h1>
    					</div>
    					<div class="card-body">
    						<form action="proses_register.php" method="post">
    							<div class="form-group">
    								<label for="username">Username</label>
    								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="password">Password</label>
    								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
    							</div>
                                <div>
                                <tr>
                                    <td bgcolor="#ffc0cb"><strong>Level</strong></td>
                                    <td bgcolor="#ffc0cb">
                                    <select name="level">
                                    <option value="admin">Admin
                                    <option value="dokter">Dokter
                                    <option value="pasien">Pasien
                                    </select>
                                    </td>
                                </tr>
                                </div>
                                <br>
    							<button type="submit" class="btn btn-primary">Register</button>
    						</form>
							<br>
							<center>
								<label>Sudah punya akun : <a class="link" href="login.php">Login</a></label>
							</center>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </body>
<?php
session_destroy();
?>