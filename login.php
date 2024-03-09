<?php
include_once('database.php');
if (isset($_SESSION['username'])) {
  header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;
      }

      button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
      }

      button[type="submit"]:hover {
        background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="card p-3">
      <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success <?= $_SESSION['success'] == 'danger' ? 'bg-danger text-light' : null ?>" role="alert">
          <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
      <?php endif
      ?>

      <div class="card-body">
        <h2 class="card-title ">Login</h2>
        <form method="post" action="action/login.php">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group mt-3">
            <button type="submit">Login</button>
          </div>
        </form>
        <p class="text-primary mt-3">Don't have an account?&nbsp;<a href="reg.php">Register here</a></p>
        <p class="text-primary">Go back to&nbsp;<a href="index.php">homepage</a></p>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>