<?php
require('./dbcon.php');
session_start();

if (isset($_POST['btn_add_prd'])) {

    $name = strtolower($_POST['product_name']);

    $stock_xs = $_POST['xs'];
    $xs_price = $_POST['price_xs'];

    $stock_sm = $_POST['sm'];
    $sm_price = $_POST['price_sm'];

    $stock_md = $_POST['md'];
    $md_price = $_POST['price_md'];

    $stock_lg = $_POST['lg'];
    $lg_price = $_POST['price_lg'];

    $stock_xl = $_POST['xl'];
    $xl_price = $_POST['price_xl'];

    $prod_image = $_FILES['product_img']['name'];
    $target = "../src/assets/" . basename($prod_image);

    $sql = "SELECT MAX(product_id) FROM product_list";

    try {
        $checkQuery = mysqli_query($con, $sql);
        $product_id = $checkQuery->fetch_assoc()['MAX(product_id)'];
        $last_id = 0;

        if (is_null($product_id)) {
            $last_id = 1;
        } else {
            $last_id = $product_id + 1;
        }

        $name_id = $name . "_id";

        $query1 =
            "CREATE TABLE $name (
                size_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                size_type VARCHAR(255),
                stocks INT,
                price INT,
                $name_id INT NOT NULL
            );";

        $query2 = "INSERT INTO product_list (`product_name`, `product_img`, `prod_id`) 
        VALUES('$name', '$prod_image', '$last_id')";

        $query3 = "INSERT INTO $name (`size_type`, `stocks`, `price`, `$name_id`) 
        VALUES('XS', '$stock_xs', '$xs_price', '$last_id'),
        ('S', '$stock_sm', '$sm_price', '$last_id'),
        ('M', '$stock_md', '$md_price', '$last_id'),
        ('L', '$stock_lg', '$lg_price', '$last_id'),
        ('XL', '$stock_xl', '$xl_price', '$last_id');";

        try {
            $checkQuery1 = mysqli_query($con, $query1);
            try {
                $checkQuery2 = mysqli_query($con, $query2);
                try {
                    $checkQuery3 = mysqli_query($con, $query3);
                    echo "SUCCESS PRE";
                    if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target)) {
                        $_SESSION['message'] = "Product added successfully";
                        header('Location: ../pages/product_management.php');
                        exit(0);
                    } else {
                        $_SESSION['message'] = "Something Went Wrong";
                        header('Location: ../pages/add_product.php');
                        exit(0);
                    }
                } catch (Exception $e) {
                    $_SESSION['message'] = "Something Went Wrong";
                    header('Location: ../pages/add_product.php');
                    exit(0);
                }
            } catch (Exception $e) {
                $_SESSION['message'] = "Something Went Wrong";
                header('Location: ../pages/add_product.php');
                exit(0);
            }
        } catch (Exception $e) {
            $_SESSION['message'] = "Product already exists!";
            header('Location: ../pages/product_management.php');
            exit(0);
        }
    } catch (Exception $e) {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: ../pages/add_product.php');
        exit(0);
    }

    // $sql = "INSERT INTO uniform_db.product_list(`product_name`,`product_category`, `product_stocks`,`product_price`,`product_img`) VALUES ('$name','$category','$stocks','$price','$prod_image')";

    // mysqli_query($con, $sql);
}

// $result = mysqli_query($con, "SELECT * FROM product_list");
