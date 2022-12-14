<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App-Signup</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="w-400 p-5 shadow rounded">
    <form method="post" action="app/http/signup.php" enctype="multipart/form-data">
     <div class="d-flex justify-content-center align-items-center flex-column">
    <h3 class="display-4 fs-1 text-center"> SIGNUP</h3>
    <img src="img/logo.jfif" class="w-25">
    
    <?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php }
             
            if (isset($_GET['name'])) {
              	$name = $_GET['name'];
              }else $name = '';

              if (isset($_GET['username'])) {
              	$username = $_GET['username'];
              }else $username = '';
			?>
    <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name"  value="<?=$name?>" >
    </div>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" class="form-control" name="username" value="<?=$username?>" >
    </div>
    <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
    </div>
    <div class="mb-3">
    <label class="form-label">Profile Picture</label>
    <input type="file" class="form-control" name="file">
    </div>
   <button type="submit" class="btn btn-primary">SIGNUP</button> <a href="index.php">LOGIN</a>
</form></div>
</body>
</html>
<?php
  }else{
  	header("Location: home.php");
   	exit;
  }
 ?>