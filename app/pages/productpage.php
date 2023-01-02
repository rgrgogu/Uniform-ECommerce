<?php
require('../../PHP Database/dbcon.php');
require('../../pages/PHP CLASSES/ClientInfo.php');
session_start();

$newClient = $_SESSION['object'];

$id = $_GET['product_id'];
$sql    = "SELECT * FROM uniform_db.product_list WHERE `product_id`='$id'";
$result = $con->query($sql);
$result1 = $con->query($sql);

$name = mysqli_fetch_assoc($result1)['product_name'];

$sql1   = "SELECT stocks, price FROM $name";
$result2 = $con->query($sql1);

$arr = mysqli_fetch_all($result2);
// print_r($arr[0]); //first index size [0-4], second index stocks [0] price [1]

$xs_stocks = $arr[0][0];
$xs_price = $arr[0][1];

$sm_stocks = $arr[1][0];
$sm_price = $arr[1][1];

$md_stocks = $arr[2][0];
$md_price = $arr[2][1];

$lg_stocks = $arr[3][0];
$lg_price = $arr[3][1];

$xl_stocks = $arr[4][0];
$xl_price = $arr[4][1];

if (isset($_POST['item_add'])) {
    $id = $_POST['prd_id'];
    $qty = $_POST['qty'];
    $size = $_POST['option'];

    $sql = "SELECT product_name, product_img FROM product_list WHERE product_id = '$id'";
    $result = mysqli_query($con, $sql);

    $arr = mysqli_fetch_assoc($result);
    $name = $arr["product_name"];

    $img = $arr["product_img"];

    $sql1 = "SELECT price FROM $name WHERE size_type = '$size'";
    $result1 = mysqli_query($con, $sql1);

    $price = mysqli_fetch_assoc($result1)["price"];

    $price = $qty * $price;

    $query = "SELECT CASE WHEN EXISTS(SELECT 1 FROM cart_info) THEN 0 ELSE 1 END AS IsEmpty;";
    $query_run = mysqli_query($con, $query);
    $ans = mysqli_fetch_assoc($query_run)['IsEmpty'];
    $client_id = $newClient->getClientID();
        
    // EMPTY
    if($ans){
        $query1 = "INSERT INTO cart_info VALUES ('$id','$name','$size','$qty','$price','$img','$client_id')";
        $query_run1 = mysqli_query($con, $query1);
        $_SESSION['message'] = "Item has been added to your cart";
        header('Location: ../index.php');

    }
    // MAY VALUE
    else{
        $query_check = "SELECT CASE WHEN EXISTS(SELECT item_qty, item_price FROM cart_info WHERE item_id ='$id' AND item_selected = '$name' AND	size = '$size') THEN 0 ELSE 1 END AS IsEmpty";
        $query_check1 = mysqli_query($con, $query_check);
        $check_ans = mysqli_fetch_assoc($query_check1)['IsEmpty'];

        if($check_ans){
            $query1 = "INSERT INTO cart_info VALUES ('$id','$name','$size','$qty','$price','$img', '$client_id')";
            $query_run1 = mysqli_query($con, $query1);
            $_SESSION['message'] = "Item has been added to your cart";
            header('Location: ../index.php');
        }
        else{
            $query1 = "SELECT item_qty, item_price FROM cart_info WHERE item_id ='$id' AND item_selected = '$name' AND	size = '$size' AND client_id = '$client_id'";
            $query_run1 = mysqli_query($con, $query1);

            $item_arr = mysqli_fetch_assoc($query_run1);
            $item_qty = $item_arr["item_qty"];
            $item_price = $item_arr["item_price"];

            $totalQty = $item_qty + $qty;
            $totalPrice = $item_price + $price;

            $query2 = "UPDATE cart_info SET item_qty='$totalQty', item_price='$totalPrice' WHERE item_id ='$id' AND item_selected = '$name' AND	size = '$size'";
            $query_run2 = mysqli_query($con, $query2);

            $_SESSION['message'] = "Item has been added to your cart";
            header('Location: ../index.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="../../dist/main.css" rel="stylesheet" />
    <title>Product Name | Uniforms</title>
</head>

<body class="bg-gradient-to-t from-white to-[#2E849F]">
    <header id="navbar-container">
        <nav class="lg:container lg:mx-auto flex items-center justify-between sm:p-4 lg:p-6">
            <div id="logo" class="sm:w-40 lg:w-60">
                <a href="../">
                    <img src="../../src/assets/plm-logo--with-header.png" alt="">
                </a>
            </div>
            <div class="sm:hidden lg:flex lg:items-center">
                <div id="search" class="w-96 sm:hidden lg:block lg:mr-6">
                    <div class="input-group relative flex flex-nowrap items-stretch w-full">
                        <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-tl-lg rounded-bl-lg m-0" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-tr-lg rounded-br-lg flex items-center">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="login" class="lg:mr-4 block">
                    <a href="../profiles.php" class="bg-blue-500 hover:bg-blue-600 rounded-full p-2 material-symbols-outlined text-white">
                        account_circle
                    </a>
                </div>
                <div id="cart" class="lg:mr-4">
                    <a href="./cart.php" class="material-symbols-outlined text-3xl cursor-pointer">
                        shopping_bag
                    </a>
                </div>
                <div id="menu-desktop" class="cursor-pointer">
                    <span class="material-symbols-outlined pointer-events-none">
                        menu
                    </span>
                </div>
            </div>
            <div class="lg:hidden flex items-center">
                <div id="login" class="sm:mr-2">
                    <a href="../profiles.php" class="bg-blue-500 hover:bg-blue-600 rounded-full p-2 material-symbols-outlined text-white">
                        account_circle
                    </a>
                </div>
                <div id="cart" class="">
                    <a href="./cart.php" class="material-symbols-outlined text-3xl cursor-pointer">
                        shopping_bag
                    </a>
                </div>
                <div id="menu-mobile" class="cursor-pointer sm:ml-2">
                    <span class="material-symbols-outlined pointer-events-none">
                        menu
                    </span>
                </div>
            </div>
        </nav>
        <aside id="sidebar" class="bg-blue-500 p-4 text-white sm:hidden">
            <div id="search" class="w-full mb-4 lg:hidden">
                <div class="input-group relative flex flex-nowrap items-stretch w-full">
                    <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-tl-lg rounded-bl-lg transition ease-in-out m-0" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-tr-lg rounded-br-lg flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="page1" class="hover:text-purple-900">
                <a href="../">
                    <button>Home</button>
                </a>
            </div>
            <div id="page2" class="hover:text-purple-900">
                <a href="">
                    <button>Order Online</button>
                </a>
            </div>
            <div id="page3" class="hover:text-purple-900">
                <a href="./contacts.php">
                    <button>Contact Us</button>
                </a>
            </div>
            <div id="page4" class="hover:text-purple-900">
                <a href="./faq.php">
                    <button>FAQs</button>
                </a>
            </div>
            <div id="page5" class="hover:text-purple-900">
                <a href="./abouts.php">
                    <button>About Us</button>
                </a>
            </div>
            <div id="login" class="hover:text-blue-700">
                <a href="../">
                    <button>Log Out</button>
                </a>
            </div>
        </aside>
    </header>
    <aside id="sidebar-desktop" class="flex items-end flex-col lg:container lg:mx-auto absolute top-20 right-14 sm:hidden z-20">
        <section class="bg-blue-500 p-4 text-white rounded-lg">
            <div id="page1" class="hover:text-purple-900">
                <a href="./">
                    <button>Home</button>
                </a>
            </div>
            <div id="page2" class="hover:text-purple-900">
                <a href="">
                    <button>Order Online</button>
                </a>
            </div>
            <div id="page3" class="hover:text-purple-900">
                <a href="./contacts.php">
                    <button>Contact Us</button>
                </a>
            </div>
            <div id="page4" class="hover:text-purple-900">
                <a href="./faq.php">
                    <button>FAQs</button>
                </a>
            </div>
            <div id="page5" class="hover:text-purple-900">
                <a href="./abouts.php">
                    <button>About Us</button>
                </a>
            </div>
            <div id="login" class="hover:text-blue-700">
                <a href="../../">
                    <button>Log Out</button>
                </a>
            </div>
        </section>
    </aside>

    <section class="lg:container lg:mx-auto lg:px-12 lg:p-12 sm:p-6">
        <main id="product-details">
            <aside class="grid sm:grid-cols-1 sm:gap-6 lg:grid-cols-2 lg:gap-12 lg:mb-12">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        
                            <div id="productCart-flexImage">
                                <?php
                                echo "<img class='w-full rounded-xl object-cover h-[44rem]' src='../../src/assets/" . $row['product_img'] . "' >";
                                ?>
                            </div>
                            <div id="productCart-details" class="flex justify-start flex-col">
                                <div id="productCart-otherImage" class="mb-4 sm:grid sm:grid-cols-2 sm:gap-6">
                                    <?php
                                    echo "<img class='w-full  rounded-xl sm:mr-6 lg:mr-8' src='../../src/assets/" . $row['product_img'] . "' >";
                                    echo "<img class='w-full  rounded-xl sm:mr-6 lg:mr-8' src='../../src/assets/" . $row['product_img'] . "' >";

                                    ?>

                                </div>
                                <form method="POST">
                                    <span class="font-bold text-2xl mb-4">Quantity</span>
                                    <div id="quantity-ops" class="mb-4">
                                        <input type="number" name="qty" placeholder="Enter Quantity" class="border border-black p-3 px-4 rounded-lg mb-4 w-full mt-2" />
                                    </div>
                                    <div id="importance">
                                        <h2 class="font-bold mb-4 text-2xl">Sizes/Stocks</h2>

                                        <input type="hidden" name="prd_id" value="<?php echo $id; ?>"/> 
                                        <select id="sizes" name="option" class="border border-black p-3 rounded-lg w-full mb-4 bg-none appearance-none" required>
                                            <option value="" selected>-required-</option>
                                            <option value="XS"><?php 
                                            if($xs_stocks != 0){
                                                echo "Extra-Small" . " - " . $xs_stocks . " pcs. = " . "₱" . $xs_price . ".00";
                                            }
                                            else{
                                                echo
                                                    '<script>
                                                        document.querySelectorAll("#sizes option").forEach(opt => {
                                                            if (opt.value == "XS") {
                                                                opt.disabled = true;
                                                            }
                                                        }); 
                                                    </script>';
                                            }
                                            ?>
                                            </option>
                                            <option value="S"><?php
                                            if ($sm_stocks != 0) {
                                                echo "Small" . " - " . $sm_stocks . " pcs. = " . "₱" . $sm_price . ".00";
                                            } else {
                                                echo
                                                    '<script>
                                                        document.querySelectorAll("#sizes option").forEach(opt => {
                                                            if (opt.value == "S") {
                                                                opt.disabled = true;
                                                            }
                                                        }); 
                                                    </script>';
                                            }
                                            ?></option>
                                            <option value="M"><?php
                                            if ($md_stocks != 0) {
                                                echo "Medium" . " - " . $md_stocks . " pcs. = " . "₱" . $md_price . ".00";
                                            } else {
                                                echo
                                                '<script>
                                                    document.querySelectorAll("#sizes option").forEach(opt => {
                                                        if (opt.value == "M") {
                                                            opt.disabled = true;
                                                        }
                                                    }); 
                                                </script>';
                                            }                                            
                                            ?></option>
                                            <option value="L"><?php
                                            if ($lg_stocks != 0) {
                                                echo "Large" . " - " . $lg_stocks . " pcs. = " . "₱" . $lg_price . ".00";
                                            } else {
                                                echo
                                                '<script>
                                                    document.querySelectorAll("#sizes option").forEach(opt => {
                                                        if (opt.value == "L") {
                                                            opt.disabled = true;
                                                        }
                                                    }); 
                                                </script>';
                                            }
                                            ?></option>
                                            <option value="XL"><?php
                                            if ($xl_stocks != 0) {
                                                echo "Extra-Large" . " - " . $xl_stocks . " pcs. = " . "₱" . $xl_price . ".00";
                                            } else {
                                                echo
                                                '<script>
                                                    document.querySelectorAll("#sizes option").forEach(opt => {
                                                        if (opt.value == "XL") {
                                                            opt.disabled = true;
                                                        }
                                                    }); 
                                                </script>';
                                            }
                                            ?></option>
                                        </select>
                                    </div>
                                    <div id="product-price">
                                        <h2 class="font-bold text-3xl mb-4"></h2>
                                        <button  type="submit" name="item_add" class="bg-blue-500 text-white w-full p-4 rounded-lg font-bold mb-4 hover:bg-blue-600" >Add to Cart</button>
                                    </div>
                                </form>
                            </div>
                 
            </aside>
            <?php
                    }
                }
                    ?>
            <!-- <aside id="page-recommendation">
                <div id="product-header" class="sm:text-2xl lg:text-4xl font-bold sm:mb-4 lg:mb-8">
                    <h2>You may also like</h2>
                </div>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 sm:gap-4 md:gap-6 lg:grid-cols-4 lg:container lg:mx-auto flex-wrap">
                    <div id="products">
                        <div id="uniform" class="sm:mb-2 md:mb-4">
                            <a id="link-include-please">
                                <img src="../../src/assets/test1.jpeg" alt="Uniform" class="w-full rounded-xl" />
                            </a>
                        </div>
                        <div id="productItems" class="flex items-start sm:flex-col md:justify-between">
                            <div class="w-32 truncate">
                                <h2 class="font-bold sm:text-xl md:text-2xl">Uniform</h2>
                                <p class="sm:mb-1 sm:mt-1 md:mb-2 md:mt-2 sm:text-sm">paragraph is paragraph</p>
                            </div>
                            <div id="cart">
                                <button name="item_add_btn" class="bg-blue-500 p-4 px-12 rounded-xl text-white sm:p-2 md:p-3 hover:bg-blue-600" onclick="addCart()">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

            </aside> -->
        </main>
    </section>

    <script src="../sidemenu.js"></script>

</body>

</html>