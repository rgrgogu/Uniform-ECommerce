<?php
require('../../pages/PHP CLASSES/ClientInfo.php');
require('../../PHP Database/dbcon.php');
session_start();

$newClient = $_SESSION['object'];
$client_id = $newClient->getClientID();
$contact = $newClient->getContact();
$sql = "SELECT * FROM cart_info WHERE client_id = '$client_id'";
$query_run = mysqli_query($con, $sql);

$sql1 = "SELECT SUM(item_price) FROM cart_info WHERE client_id = '$client_id'";
$query_run1 = mysqli_query($con, $sql1);

$totalPrice = mysqli_fetch_assoc($query_run1)['SUM(item_price)'];
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
    <title>Cart | E-Shop</title>
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
        </section>
    </aside>

    <section class="sm:pt-1 lg:p-12">
        <aside class="lg:container lg:mx-auto px-6">
            <header id="cart-header" class="sm:mb-2 lg:mb-4">
                <h2 class="font-bold sm:text-2xl lg:text-4xl mb-2">Cart Section</h2>
                <p>This contains all items to checkout.</p>
            </header>
            <main class="grid sm:grid-cols-1 lg:grid-cols-2 lg:gap-12">

                <aside id="left-panel">
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>

                            <div id="products" class="bg-white drop-shadow-xl flex sm:flex-col md:flex-row rounded-xl mb-6">
                                <div id="product-image">
                                    <?php
                                    echo "<img class='w-[15rem] object-cover sm:rounded-t-xl md:rounded-xl h-[15rem] ' src='../../src/assets/" . $row['item_img'] . "' >";
                                    ?>
                                </div>
                                <div id="product-details" class="p-6">
                                    <h2 class="font-bold text-2xl"><?php echo strtoupper($row['item_selected'] . " - " . $row['size']); ?></h2>
                                    <p>Quantity: <?php echo $row['item_qty']; ?></p>
                                    <span>Total: <?php echo $row['item_price']; ?></span>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>
                </aside>
                <aside id="right-panel">
                    <form action="checkout.php" method="POST">
                        <div class="bg-[#2E849F] text-white p-4 rounded-lg mb-4">
                            <span>Total Price: ₱ <?php if ($totalPrice == null) echo "0";
                                                    else echo $totalPrice; ?>.00</span>
                        </div>
                        <div id="delivery-info">

                            <h2 class="font-bold text-2xl mb-2">Delivery Information</h2>
                            <div class="flex flex-col items-start">
                                <label class="mb-2">Address</label>
                                <input type="text" name="address" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 w-full" placeholder="Address" autocomplete="off" required />
                            </div>
                            <div class="flex flex-col items-start">
                                <label class="mb-2">Contact Number</label>
                                <input type="number" name="contact" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 w-full" value="<?php echo $contact ?>" placeholder="Contact Number" autocomplete="off" onkeypress="return onlyNumberKey(event)" required />
                            </div>
                        </div>
                        <div id="cart" class="flex flex-col items-start mb-4">
                            <label class="font-bold text-2xl mb-2">Mode of Payment</label>
                            <div id="first">
                                <input type="radio" name="payment" value="GCASH: Send your screenshot of payment thru email plmcoop@plm.edu.ph">
                                <label>GCASH: Send your screenshot of payment thru email plmcoop@plm.edu.ph</label>
                            </div>
                            <div id="first">
                                <input type="radio" name="payment" value="Cash on Delivery">
                                <label>Cash on Delivery</label>
                            </div>
                            <div id="first" class="mb-4">
                                <input type="radio" name="payment" value="Store Pick-up">
                                <label>Store Pick-up</label>
                            </div>
                            <div id="submit-now" class="self-end">
                                <button type="submit" name="btn_checkout" class="bg-[#2E849F] text-white p-4 rounded-lg px-12 hover:bg-[#236377]" onclick="checkout()">Checkout</button>
                            </div>
                        </div>
                    </form>
                </aside>
            </main>
        </aside>

    </section>

    <script src="../sidemenu.js"></script>
    <script src="../../src/events.js"></script>
</body>

</html>