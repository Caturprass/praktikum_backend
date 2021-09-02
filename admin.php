<?php 
session_start();

if (!$_SESSION['berhasil']) {
    header("Location: index.php");
    die();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>admin</title>
    </head>
    <body>

            <h1>WELCOME TO HOME</h1>
            <li>
                <a href="logout.php">Logout</a>
            </li>
    </body>
</html>