<?php
    function check_login($Con){
        if(isset($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $query = "select * from users_tb where id = '$id'";

            $result = mysqli_query($Con, $query);
            if($result > 0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }

        }

        //redirect to login
        //header("Location: login.php");
        //die;
    }
?>