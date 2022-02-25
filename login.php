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
            //Reading data from the database
            $query = "Select * from users_tb where user_name = '$user_name'";
            $result = mysqli_query($Con, $query);
            $user_data = mysqli_fetch_assoc($result);

            if($result){
                if(!empty($user_data)){
                    $_SESSION['id'] = $user_data['id'];
                    echo "<script>alert('Welcome $user_name! Please have a great day.');document.location='index.php'</script>";
                    die;
                }else{
                    echo "<script>alert('Sorry, this user do not exist in the database! Please signup')</script>";
                }
            }
            else{
                echo "<script>alert('Error!')</script>";
            }
        }
        else{
            echo "<script>alert('Please enter valid data')</script>";
        }
           
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="loginForm">
    <h2>Login Form</h2>
        <form method="post">
            Enter your name <input type="text" name="uName" placeholder="Enter Username">
            Enter your password <input type="password" name="pass" placeholder="Enter Password">
            <button type="submit">Login now</button>
        </form>
    </div>
</body>
</html>