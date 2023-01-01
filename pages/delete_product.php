<?php
session_start();
include('../PHP Database/dbcon.php');
 if (isset($_GET['product_id'])) {

$id = $_GET['product_id'];

$sql = "DELETE FROM `product_list` WHERE `product_id`='$id'";

 $result = $con->query($sql);

 if ($result == TRUE) {
    $_SESSION['message'] = "Services Deleted Successfully";
    header('Location: product_management.php');
    exit(0);

}else{

    $_SESSION['message'] = "Something Went Wrong";
    exit(0);

}

}
?>