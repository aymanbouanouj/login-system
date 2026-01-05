<?php
include "config/db.php";
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">Dashboard</span>
    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
</nav>

<div class="container mt-5">
    <h2>Welcome <?php echo $_SESSION['user']; ?> </h2>
    <p>You are logged in successfully.</p>
</div>

</body>
</html>
