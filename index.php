<?php
    include('header.php');
    include('footer.php');
    include('functions.php');
    include('connection.php');

    session_start();
    $_SESSION;

    $user_data = check_login($Con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello there</title>
</head>
<body>
    
</body>
</html>