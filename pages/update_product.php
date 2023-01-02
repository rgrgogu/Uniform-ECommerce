<?php
session_start();
include('../PHP Database/dbcon.php');

// UPDATING QUERY
if (isset($_POST['btn_update_prd'])) {
    $id = $_POST['product_id'];
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

    $sql = "UPDATE `$name` SET `stocks` = '$stock_xs', `price`='$xs_price' WHERE `size_type`='XS'";
    $sql1 = "UPDATE `$name` SET `stocks` = '$stock_sm', `price`='$sm_price' WHERE `size_type`='S'";
    $sql2 = "UPDATE `$name` SET `stocks` = '$stock_md', `price`='$md_price' WHERE `size_type`='M'";
    $sql3 = "UPDATE `$name` SET `stocks` = '$stock_lg', `price`='$lg_price' WHERE `size_type`='L'";
    $sql4 = "UPDATE `$name` SET `stocks` = '$stock_xl', `price`='$xl_price' WHERE `size_type`='XL'";

    $result = $con->query($sql);
    $result1 = $con->query($sql1);
    $result2 = $con->query($sql2);
    $result3 = $con->query($sql3);
    $result4 = $con->query($sql4);

    if ($result && $result1 && $result2 && $result3 && $result4) {
        $_SESSION['message'] = "Record Updated Successfully";
        header('Location: product_management.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: update_product.php');
        exit(0);
    }
}


// UPDATE BUTTON
if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];
    $sql = "SELECT * FROM `product_list` WHERE `product_id`='$id'";

    $result = $con->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $arr1 = $_SESSION['arr'];
        $table = 0;
        // print_r($arr1);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['product_id'];
            $name = $row['product_name'];

            $table_id = $id - 1;

            $stock_xs = $arr1[$table_id][0][1]; // stocks
            $xs_price = $arr1[$table_id][0][2]; // price

            $stock_sm = $arr1[$table_id][1][1];
            $sm_price = $arr1[$table_id][1][2];

            $stock_md = $arr1[$table_id][2][1];
            $md_price = $arr1[$table_id][2][2];

            $stock_lg = $arr1[$table_id][3][1];
            $lg_price = $arr1[$table_id][3][2];

            $stock_xl = $arr1[$table_id][4][1];
            $xl_price = $arr1[$table_id][4][2];
        }
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
            <link href="../dist/main.css" rel="stylesheet" />
            <title>Update Product | E-Shop</title>
        </head>

        <body>
            <main class="bg-gradient-to-t from-white to-[#2E849F] h-screen w-screen flex items-center justify-center">
                <section class="bg-[#8ABFD0] sm:h-screen sm:w-screen sm:p-6 lg:p-12 sm:rounded-none lg:rounded-xl lg:w-fit lg:h-fit">
                    <?php include('../PHP Database/messages.php'); ?>
                    <header class="mb-4">
                        <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2">Update <?php echo strtoupper($name) ?></h2>
                        <p class="sm:text-xs md:text-base">Enter details of product you wish to change</p>
                    </header>
                    <form action="update_product.php" method="POST" id="switchTab" class="w-full" enctype="multipart/form-data">
                        <div class="flex flex-col">
                            <input type="hidden" name="product_id" value="<?php echo $id ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                            <input type="hidden" name="product_name" value="<?php echo strtoupper($name) ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                            <label for="">EXTRA-SMALL</label>
                            <div class="flex flex-row">
                                <input type="number" name="xs" placeholder="No. of XS Stocks" value="<?php echo $stock_xs ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                                <input type="number" name="price_xs" placeholder="Extra Small Price" value="<?php echo $xs_price ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                            </div>
                            <label for="">SMALL</label>
                            <div class="flex flex-row">
                                <input type="number" name="sm" placeholder="No. of SM Stocks" value="<?php echo $stock_sm ?>" class=" border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                                <input type="number" name="price_sm" placeholder="Small Price" value="<?php echo $sm_price ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                            </div>
                            <label for="">MEDIUM</label>
                            <div class="flex flex-row">
                                <input type="number" name="md" placeholder="No. of MD Stocks" value="<?php echo $stock_md ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                                <input type="number" name="price_md" placeholder="Medium Price" value="<?php echo $md_price ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                            </div>
                            <label for="">LARGE</label>
                            <div class="flex flex-row">
                                <input type="number" name="lg" placeholder="No. of LG Stocks" value="<?php echo $stock_lg ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                                <input type="number" name="price_lg" placeholder="Large Price" value="<?php echo $lg_price ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                            </div>
                            <label for="">EXTRA-LARGE</label>
                            <div class="flex flex-row">
                                <input type="number" name="xl" placeholder="No. of XL Stocks"  value="<?php echo $stock_xl ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                                <input type="number" name="price_xl" placeholder="Extra Large Price" value="<?php echo $xl_price ?>" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                            </div>
                        </div>
                        <div id="options" class="mt-3">
                            <input type="submit" name="btn_update_prd" value="Continue" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600" />
                        </div>
                    </form>
                </section>
            </main>

            <script src="./src/events.js"></script>

        </body>

        </html>
<?php

    } else {

        header('Location: product_management.php');
    }
}
?>