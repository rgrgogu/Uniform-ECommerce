<?php
session_start();
include('../PHP Database/dbcon.php');

if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];

    $sql = "SELECT product_name FROM `product_list` WHERE `product_id`='$id'";
    $result = $con->query($sql);
    $name = mysqli_fetch_assoc($result)['product_name'];

    $sql1 = "DELETE FROM `product_list` WHERE `product_id`='$id'";
    $result1 = $con->query($sql1);

    $sql2 = "DROP TABLE $name";
    $result2 = $con->query($sql2);

    if ($result && $result1 && $result2) {
        $_SESSION['message'] = "Services Deleted Successfully";
        header('Location: product_management.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something Went Wrong";
        exit(0);
    }
}
