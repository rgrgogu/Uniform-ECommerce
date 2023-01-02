<?php
require('../pages/PHP Classes/ClientInfo.php');
require('./dbcon.php');
session_start();

if (isset($_POST['btn_edit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $password = $_POST['pass'];

    // echo $fname . "<br>";
    // echo $lname . "<br>";
    // echo $contact . "<br>";
    // echo $password . "<br>";

    $newClient = $_SESSION['object'];
    $client_id = $newClient->getClientID();

    $newClient->setFirstName($fname);
    $newClient->setLastName($lname);
    $newClient->setContact($contact);
    $newClient->setPassword($password);

    $_SESSION['object'] = $newClient;

    $query = "UPDATE client_info SET first_name = '$fname', last_name = '$lname', contact='$contact', password='$password' WHERE client_id = '$client_id';";

    try {
        $checkQuery = mysqli_query($con, $query);

        $_SESSION['message'] = "Profile successfully updated!";
        header('Location: ../app/profiles.php');
        exit(0);
    } catch (Exception $e) {
        $_SESSION['message'] = "Something went wrong!";
        header('Location: ../app/profiles.php');
        exit(0);
    }
}
?>