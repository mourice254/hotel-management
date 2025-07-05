<?php
session_start();

// Database credentials - update with your own
$host = 'localhost';
$db   = 'hotel_db';
$user = 'dbuser';
$pass = 'dbpass';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize input
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validate input
    if (!$fullname || !$email || !$username || !$password) {
        $message = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email address.";
    } else {
        try {
            // Connect to DB
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            // Check if username or email exists
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ? OR email = ?");
            $stmt->execute([$username, $email]);
            if ($stmt->fetchColumn() > 0) {
                $message = "Username or email already exists.";
            } else {
                // Hash password and insert
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $pdo->prepare("INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)");
                $stmt->execute([$fullname, $email, $username, $passwordHash]);

                $message = "Registration successful! You can now <a href='signin.html'>login</a>.";
            }
        } catch (PDOException $e) {
            $message = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/683b4b40e3.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container mt-5">
    <h1 class="mb-4">Sign Up</h1>

    <?php if ($message): ?>
      <div class="alert alert-info"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="post" action="signup.php">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input required type="text" name="fullname" class="form-control" id="fullname" value="<?php echo htmlspecialchars($_POST['fullname'] ?? '') ?>" />
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input required type="email" name="email" class="form-control" id="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>" />
      </div>
      <div class="form-group">
        <label for="username">User Name</label>
        <input required type="text" name="username" class="form-control" id="username" value="<?php echo htmlspecialchars($_POST['username'] ?? '') ?>" />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input required type="password" name="password" class="form-control" id="password" />
      </div>

      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>

    <p class="mt-3">Already have an account? <a href="signin.html">Log In</a></p>
  </div>
</body>

</html>
