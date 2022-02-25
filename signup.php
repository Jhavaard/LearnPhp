<?php
    include('header.php');
    include('footer.php');
    include('connection.php');
    include('functions.php');

    session_start();

    //check for post - that someone has clicked a button
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['uName'];
        $user_pass = $_POST['pass'];

        if(!empty($user_name) && !empty($user_pass)){
            //Sava data to database
            $query = "insert into users_tb (user_name, user_pass) values ('$user_name', '$user_pass')";
            mysqli_query($Con, $query);

            //Message user with success if logged in
            echo "<script>alert('Welcome $user_name! Please signin to gain access.');document.location='login.php'</script>";
            die;
        }else{
            echo "<script>alert('Please enter valid data!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body>
    <div class="signupForm">
    <h2>Signup Form</h2>
        <form method="post">
            Enter your name <input type="text" name="uName" placeholder="Enter Username">
            Enter your password <input type="password" name="pass" placeholder="Enter Password">
            <button type="submit">Signup now</button>
        </form>
    </div>
</body>
</html>