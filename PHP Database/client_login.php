<?php
    session_start();
    require('../pages/PHP Classes/ClientInfo.php');
    require('./dbcon.php');

    if(isset($_POST['btn_login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email. "<br>";
        echo $password . "<br>";

        $query = "SELECT * FROM client_info WHERE email = '$email' AND password = '$password'";

        try{
            $checkQuery = mysqli_query($con, $query);

            if(mysqli_num_rows($checkQuery) != 0){
                $arr_clientInfo = mysqli_fetch_array($checkQuery);
                $newClient = new ClientInfo($arr_clientInfo);

                $_SESSION['object'] = $newClient;

                header('Location: ../app/index.php');
                exit(0);
            }
            else{
                $_SESSION['message'] = "Invalid username or password!";
                header('Location: ../index.php');
            }
        }catch(Exception $e){
            $_SESSION['message'] = "Something went wrong";
            header('Location: ../index.php');
        }
    }
?>
