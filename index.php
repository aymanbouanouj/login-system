<?php include "config/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="col-md-4 mx-auto card p-4">
        <h3 class="text-center">Login</h3>

        <form method="POST">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <button name="login" class="btn btn-primary w-100">Login</button>
        </form>

        <p class="text-center mt-3">
            No account? <a href="register.php">Register</a>
        </p>

        <?php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $result = $conn->query("SELECT * FROM users WHERE email='$email'");

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user'] = $user['username'];
                    header("Location: dashboard.php");
                } else {
                    echo "<div class='alert alert-danger'>Wrong password</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>User not found</div>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
