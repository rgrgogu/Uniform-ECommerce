<?php
include('../PHP Database/dbcon.php');
session_start();

if (isset($_POST['update'])) {

    $client_id = $_POST['order_id'];

    $status = $_POST['status'] == true ? 'ORDER' : 'CHECKED-OUT';

    $query = "UPDATE order_list SET status='$status' WHERE order_id ='$client_id'";
    $query_run = $con->query($query);

    if ($query_run == TRUE) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: ../pages/order_management.php ");
        // echo "
        //     <script type='text/javascript'>
        //         var tableHeaderRowCount = 1;
        //         var table = document.getElementById('transactTable');
        //         var rowCount = table.rows.length;
        //         for (var i = tableHeaderRowCount; i < rowCount; i++) {
        //             table.deleteRow(tableHeaderRowCount);
        //         } 
        //         window.location.href = '../pages/order_management.php';
        //     </script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Something Went Wrong";
    }
}
if (isset($_GET['order_id'])) {

    $client_id = $_GET['order_id'];

    $sql = "SELECT * FROM `order_list` WHERE `order_id`='$client_id'";

    $result = $con->query($sql);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $name = $row['status'];

            $id = $row['order_id'];
        }
        exit(0);
    }
}

?>