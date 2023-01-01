<?php
    session_start();
    require('./dbcon.php');

    if(isset($_POST['btn_forgot'])){
        $fname = $_POST['fName'];
        $lname = $_POST['lName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // echo $fname . "<br>";
        // echo $lname . "<br>";
        // echo $email. "<br>";
        // echo $password . "<br>";

        $query = "SELECT admin_id FROM admin_info WHERE first_name = '$fname' AND last_name = '$lname' AND email = '$email'";

        try{
            $checkQuery = mysqli_query($con, $query);

            if(mysqli_num_rows($checkQuery) != 0){
                $admin_id = $checkQuery->fetch_assoc()['admin_id'];
                $_SESSION['admin_id'] = $admin_id;
                header('Location: ../pages/update_password.php');
                exit(0);
            }
            else{
                $_SESSION['message'] = "Account hasn't been registered in the system!";
                header('Location: ../index.php');
            }
        }catch(Exception $e){
            $_SESSION['message'] = "Something went wrong";
            header('Location: ../index.php');
        }
    }

    if(isset($_POST['btn_update'])){
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPass'];

        if($password == $confirmPass){
            $admin_id = $_SESSION['admin_id'];

            $query = "UPDATE admin_info SET password='$password' WHERE admin_id = '$admin_id'";

            try{
                $checkQuery = mysqli_query($con, $query);
                $_SESSION['message'] = "Account successfully changed password.";
                header("Location: ../index.php");
            }catch(Exception $e){
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../index.php');
            }
        }
    }
?>
