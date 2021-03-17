<?php
//include auth_session.php file on all user panel pages
include("agent_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Agent Area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now agent dashboard page.</p>
        <p><a href="agent_logout.php">Logout</a></p>
    </div>
</body>
</html>