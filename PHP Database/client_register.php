<?php
session_start();
require('../PHP Database/dbcon.php');

if (isset($_POST['btn_register'])) {
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];

    // echo $fname . "<br>";
    // echo $lname . "<br>";
    // echo $contact . "<br>";
    // echo $email. "<br>";
    // echo $password . "<br>";
    // echo $confirmPass . "<br>";

    if ($password == $confirmPass) {
        $query = "SELECT * FROM admin_info WHERE email = '$email' AND first_name='$fname' AND last_name='$lname'";
        $query1 = "INSERT INTO `admin_info`(`first_name`, `last_name`, `contact`, `email`, `password`) 
            VALUES ('$fname','$lname','$contact','$email','$password')";

        try {
            $checkQuery = mysqli_query($con, $query);

            if (mysqli_num_rows($checkQuery) == 0) {
                try {
                    $checkQuery1 = mysqli_query($con, $query1);
                    $_SESSION['message'] = "Account successfully registered";
                    header('Location: ../index.php');
                } catch (Exception $e) {
                    $_SESSION['message'] = "Something went wrong";
                    header('Location: ../index.php');
                }
            } else {
                $_SESSION['message'] = "Account has been registered in the system!";
                header('Location: ../pages/register.php');
            }
        } catch (Exception $e) {
            $_SESSION['message'] = "Something went wrong";
            header('Location: ../index.php');
        }
    } else {
        $_SESSION['message'] = "Password didn't matched!";
        header('Location: ../pages/register.php');
    }
}

?>

<script src="../pages/register.php"></script>
