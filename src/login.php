<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Leave Feedback</title>
</head>
<body>
  <?php include 'components/header.php'; ?>
  <main>
    <div class="container d-flex flex-column align-items-center">
    <img src="/" class="w-25 mb-3" alt="">
    <h2>Login</h2>
    <p class="lead text-center">Login with your account or <a href="register.php">Register</a> if you don't have one.</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
          
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Password</label>
        <input type="password" placeholder="Enter a password" class="form-control"> </input>
        <div class="invalid-feedback">
          
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Login" class="btn btn-dark w-100">
      </div>
    </form>
    </div>
  </main>
</body>