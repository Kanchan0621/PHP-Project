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
    <title>Chat App-Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="w-400 p-5 shadow rounded">
    <form method="post" action="app/http/auth.php">
     <div class="d-flex justify-content-center align-items-center flex-column">
    <h3 class="display-4 fs-1 text-center"> LOGIN</h3>
			
            <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
             <?php echo htmlspecialchars($_GET['success']);?>
           </div>
           <?php } ?>
    <img src="img/logo.jfif" class="w-25">
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" class="form-control" name="username" >
    </div>
    <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
    </div>
   <button type="submit" class="btn btn-primary">LOGIN</button> <a href="signup.php">SIGNUP</a>
</form></div>
</body>
</html>
<?php
  }else{
  	header("Location: index.php");
   	exit;
  }
 ?>