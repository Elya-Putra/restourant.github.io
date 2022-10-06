<?php 
	session_start();
	include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/main.css">
  </head>
  <body>
    <div class="container">
        <div class="row login">
            <div class="box">
                <h1>Silakan <span>Login</span></h1>
				<?php
					if(isset($_GET['msg'])){
						echo "<div class='alert alert-error'>".$_GET['msg']."</div>";
					}
				?>
				<!--Form login -->
				<form action="" method="post">
					<div class="form-group">
						<input type="text" name="user" placeholder="Username" class="input-control">
					</div>
					<div class="form-group">
						<input type="password" name="pass" placeholder="Password" class="input-control">
					</div>
					<input type="submit" name="submit" value="Login" class="btn">
					<div class="register">
            			<p>Anda belum punya akun? <a href="register.php">Register</a></p>
					</div>				
				</form>
				<?php
				if(isset($_POST['submit'])){
					$user = mysqli_real_escape_string($conn, $_POST['user']);
					$pass = mysqli_real_escape_string($conn, $_POST['pass']);

					$cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='".$user."'");
					if(mysqli_num_rows($cek) >0){
						$d=mysqli_fetch_object($cek);
						if(($pass) == $d->password){

							$_SESSION['status_login'] = true;
						//	$_SESSION['uid']=$d->id_petugas;
						//	$_SESSION['uname']=$d->nama_petugas;
							
							echo "<script>window.location='berhasil-login.php'</script>";
							
						}else{
							echo '<div class="alert alert-error">Password salah</div>';
						}

					}else{
						echo '<div class="alert alert-error"> User tidak ditemukan</div>';
					}
				}
				?>
			</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>