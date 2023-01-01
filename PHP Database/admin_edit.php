<?php
require('../pages/PHP Classes/AdminInfo.php');
require('./dbcon.php');
session_start();

if (isset($_POST['btn_edit'])) {
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $contact = $_POST['contact'];
    $password = $_POST['pass'];

    // echo $fname . "<br>";
    // echo $lname . "<br>";
    // echo $contact . "<br>";
    // echo $password . "<br>";

    $newAdmin = $_SESSION['object'];
    $admin_id = $newAdmin->getAdminID();

    $newAdmin->setFirstName($fname);
    $newAdmin->setLastName($lname);
    $newAdmin->setContact($contact);
    $newAdmin->setPassword($password);

    $_SESSION['object'] = $newAdmin;

    $query = "UPDATE admin_info SET first_name = '$fname', last_name = '$lname', contact='$contact', password='$password' WHERE admin_id = '$admin_id';";

    try {
        $checkQuery = mysqli_query($con, $query);

        $_SESSION['message'] = "Profile successfully updated!";
        header('Location: ../pages/profiles.php');
        exit(0);
    } catch (Exception $e) {
        $_SESSION['message'] = "Something went wrong!";
        header('Location: ../pages/profiles.php');
        exit(0);
    }
}
