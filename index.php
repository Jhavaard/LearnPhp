<?php
    include('header.php');
    include('connection.php');
    include('functions.php');

    //session_start();
    //$_SESSION;

    //$user_data = check_login($Con);
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
    <table>
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>User Password</th>
        </tr>
        <br></br><br></br>
        <?php
            $datas = setDataFromDB($Con);

            foreach($datas as $data1){
                echo '<tr>';
                foreach($data1 as $data2){
                    echo "<td>$data2</td>";
                }
                echo '</tr>';
            }
        ?>
    </table>
</body>
<?php include('footer.php');?>
</html>