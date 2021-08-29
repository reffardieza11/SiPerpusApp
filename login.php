<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport " content="width=device-width, initial-scale=1 ">
	<title>Si Perpus | Welcome</title>

	<!-- Favicons -->
	<link href="https://preview.redd.it/ncvcfof1yqd71.png?width=1107&format=png&auto=webp&s=e3bcd8df6f835df5365654ebd84a1fa718d9052a" rel="icon">
	<link href="https://preview.redd.it/ncvcfof1yqd71.png?width=1107&format=png&auto=webp&s=e3bcd8df6f835df5365654ebd84a1fa718d9052ama.png" rel="touch-icon">

	<!-- Vendor -->
	<link rel="stylesheet" href="vendor/bootstrap-5/css/bootstrap.min.css">

    <!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style_login.css">
	
</head>
<body class="text-center">
	<main class="form-signin">
		<form action="login-proses.php" method="post">
			<img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/e/e2/LOGO-PERPUSNAS.svg" alt="" width="72" height="57"><br/>
			<h3 class="text-center mb-3 fw-normal">Admin Perpustakaan</h3>

			<div class="form-floating">
				<input class="form-control" type="text" id="floatingInput" name="username" placeholder="Your Username">
				<label for="floatingInput">Username</label>	
			</div>
			<div class="form-floating">
				<input class="form-control" type="password" id="floatingPassword" name="password" placeholder="Your Password">
				<label for="floatingPassword">Password</label>
			</div>
			<div class="checkbox mb-3">
		      <label>
		        <input type="checkbox" value="remember-me"> Ingat Saya
		      </label>
		    </div>
    		<button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Masuk</button>
    		<p class="mt-5 mb-3 text-muted">&copy Junior Web Developer UGM 2021</p>

		</form>
	</main>

	<!-- Javascript -->
</body>
</html>