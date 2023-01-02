<?php
require('../../pages/PHP CLASSES/ClientInfo.php');
require('../../PHP Database/dbcon.php');
require_once('../../phpqrcode/qrlib.php');

session_start();

if (isset($_POST['btn_checkout'])) {
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $mop = $_POST['payment'];

    if (str_contains($mop, "GCASH")) {
        $mop = "GCASH";
    }

    $newClient = $_SESSION['object'];
    $client_id = $newClient->getClientID();

    $sql = "SELECT MAX(order_id) FROM order_list";
    $checkQuery = mysqli_query($con, $sql);
    $order_id = $checkQuery->fetch_assoc()['MAX(order_id)'];

    $last_id = 0;

    if (is_null($order_id)) {
        $last_id = 1;
    } else {
        $last_id = $order_id + 1;
    }

    $sql1 = "SELECT * FROM cart_info WHERE client_id = '$client_id'";
    $query_run = mysqli_query($con, $sql1); // items

    $sql2 = "SELECT SUM(item_price) FROM cart_info WHERE client_id = '$client_id'";
    $query_run1 = mysqli_query($con, $sql2);

    $totalPrice = mysqli_fetch_assoc($query_run1)['SUM(item_price)']; // total price

    $t = time();
    $date_created = date("Ymd", $t) . $t;

    $path = './images/';
    $qrcode = $path . $date_created . ".png";
    $qrimage = time() . ".png";

    $sql3 = "INSERT INTO `order_list`(`client_id`, `item_id`, `total_price`, `status`, `mop`, `qr_code`, `date_created`) 
    VALUES ('$client_id','$last_id','$totalPrice','ORDER', '$mop', '$qrcode','$date_created')";
    $query_run2 = mysqli_query($con, $sql3);

    $arr = array();
    $str = "";

    while ($row = mysqli_fetch_assoc($query_run)) {
        $item_name = $row['item_selected'];
        $item_size = $row['size'];
        $item_qty = $row['item_qty'];
        $item_price = $row['item_price'];

        $ary = array($item_name, $item_size, $item_qty);
        array_push($arr, $ary);

        $str .= '    ' . $item_name . " - " . $item_size . " (" . $item_qty . " pcs. ) = " . $item_price  . "<br>";

        $sql4 = "INSERT INTO `order_items`(`item_id`, `item_name`, `item_size`, `item_qty`, `date_created`) 
        VALUES ('$last_id','$item_name','$item_size', '$item_qty', '$date_created')";

        $query_run3 = mysqli_query($con, $sql4);
    }

    $sql5 = "DELETE FROM cart_info WHERE client_id='$client_id'";
    $query_run4 = mysqli_query($con, $sql5);

    for ($x = 0; $x < count($arr); $x++) {
        $item_name = $arr[$x][0];
        $item_size = $arr[$x][1];
        $item_qty = $arr[$x][2];

        $sql6 = "SELECT stocks FROM $item_name WHERE size_type='$item_size'";
        $query_run5 = mysqli_query($con, $sql6);

        $stocks = mysqli_fetch_assoc($query_run5)['stocks'];
        $diff = $stocks - $item_qty;

        $sql7 = "UPDATE $item_name SET stocks = '$diff' WHERE size_type = '$item_size'";
        $query_run6 = mysqli_query($con, $sql7);
    }

    $qrtext =
        'Client Name: ' . $newClient->getFullName() . " " .
        'Address: ' . $address . " " .
        'Contact: ' . $contact . " "  .
        'Items: ' . $str . " " .
        'Total Price: ' . $totalPrice . ".00" . " " .
        'Mode of Payment: ' . $mop . " ";

    QRcode::png($qrtext, $qrcode, 'H', 4, 4);
    // QRcode::png("Hi", $qrcode, 'H', 4, 4);
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
    <title>Checkout | E-Shop</title>
</head>

<body class="bg-gradient-to-t from-white to-[#2E849F]">
    <header id="navbar-container" class="">
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
                    <span class="material-symbols-outlined text-3xl cursor-pointer">
                        shopping_bag
                    </span>
                </div>
                <div id="menu-desktop" class="cursor-pointer">
                    <span class="material-symbols-outlined pointer-events-none">
                        menu
                    </span>
                </div>
            </div>
            <div class="lg:hidden flex items-center">
                <div id="login" class="lg:mr-4">
                    <a href="../profiles.php" class="bg-blue-500 hover:bg-blue-600 rounded-full p-2 material-symbols-outlined text-white">
                        account_circle
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
                <a href="../index.php">
                    <button>Home</button>
                </a>
            </div>
            <div id="page2" class="hover:text-purple-900">
                <a href="../index.php">
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
                <a href="../../index.php">
                    <button>Log Out</button>
                </a>
            </div>
        </aside>
    </header>
    <aside id="sidebar-desktop" class="flex items-end flex-col lg:container lg:mx-auto absolute top-20 right-14 sm:hidden z-20">
        <section class="bg-blue-500 p-4 text-white rounded-lg">
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
                <a href="../../">
                    <button>Log Out</button>
                </a>
            </div>
        </section>
    </aside>

    <section class="sm:pt-1 lg:p-12">
        <aside class="lg:container lg:mx-auto px-6">
            <header id="cart-header" class="sm:mb-2 lg:mb-4">
                <h2 class="font-bold sm:text-2xl lg:text-4xl mb-2">Thank you for your purchase</h2>

            </header>
            <main class="grid sm:grid-cols-1 lg:grid-cols-2 lg:gap-12">

                <aside id="right-panel">
                    <div id="delivery-info">
                        <h2 class="font-bold text-2xl mb-2">Delivery Information</h2>
                        <div class="flex flex-col items-start">
                            <label class="mb-2">Address</label>
                            <span class="font-bold mb-2"><?php echo $address ?></span>
                        </div>
                        <div class="flex flex-col items-start">
                            <label class="mb-2">Contact Number</label>
                            <span class="font-bold mb-2"><?php echo $contact ?></span>
                        </div>
                    </div>
                    <div id="checkout" class="flex flex-col items-start mb-4">
                        <label class="font-bold text-2xl mb-2">Mode of Payment</label>
                        <div id="first" class="mb-4">
                            <label><?php echo $mop ?></label>
                        </div>
                        <div id="submit-now" class="inline-flex">
                            <div class="border border-black mr-4">
                                <?php echo "<img src='" . $qrcode . "'>"; ?>
                                <!-- <img src="../../src/assets/qrcode-sample.jpeg" alt="qrcode" class="sm:w-36 lg:w-48"> -->
                            </div>
                            <div class="sm:text-sm md:text-xl lg:text-2xl">
                                <span>Save this QR code for receipt purposes!</span>
                            </div>
                        </div>
                    </div>
                </aside>
            </main>
        </aside>
    </section>


    <script src="../sidemenu.js"></script>
</body>

</html>