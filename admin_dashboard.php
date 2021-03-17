<?php
//include auth_session.php file on all user panel pages
include("admin_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Admin</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now admin dashboard page.</p>
        <p><a href="admin_logout.php">Logout</a></p>
    </div>
</body>
</html>