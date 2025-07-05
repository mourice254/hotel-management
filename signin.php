<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!$username || !$password) {
        $error = "Please enter username and password.";
    } else {
        // DB config - change to your own
        $host = 'localhost';
        $db   = 'hotel_db';
        $user = 'dbuser';
        $pass = 'dbpass';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Login success
                $_SESSION['username'] = $user['username'];
                header('Location: dashboard.php');
                exit();
            } else {
                $error = "Invalid username or password.";
            }
        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Log In</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/683b4b40e3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="signin.css" />
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-8 bg"></div>
      <div class="col-4">
        <h2 class="margin text_acc"><u>Account Login</u></h2>

        <?php if ($error): ?>
          <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="post" action="login.php">
          <div class="form-group">
            <label for="username" class="text">Username:</label>
            <input type="text" name="username" class="form-control" id="username" required />
          </div>
          <div class="form-group">
            <label for="password" class="text">Password:</label>
            <input type="password" name="password" class="form-control" id="password" required />
          </div>

          <button type="submit" class="btn btn-primary gradient btn-lg mt-3" id="login">Sign In</button>
        </form>

        <div class="row">
          <div class="col">
            <p class="mt-5 allign">Or Sign Up Using</p>
            <p>
              <span><i class="fab fa-facebook-f ml-3 fa-fb"></i></span>
              <span><i class="fab fa-twitter ml-3 fa-tw"></i></span>
              <span><i class="fab fa-google ml-3 fa-go"></i></span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="signin.js"></script>
</body>
</html>
