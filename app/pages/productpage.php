<?php
    require('../../PHP Database/dbcon.php');
    session_start();

if (isset($_GET['product_id'])) {

    $id = $_GET['product_id'];

    $sql = "SELECT * FROM `product_list` WHERE `product_id`='$id'";

    $result = $con->query($sql);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $name = $row['product_'];
            $name = $row['detergent_name'];
            $id = $row['id_detergent'];
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
                    <a href="./profiles.php" class="bg-blue-500 hover:bg-blue-600 rounded-full p-2 material-symbols-outlined text-white">
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
                <div id="productCart-flexImage">
                    <img src="../../src/assets/test1.jpeg" alt="test me" class="w-full rounded-xl" />
                </div>
                <div id="productCart-details" class="flex justify-start flex-col">
                    <div id="productCart-otherImage" class="mb-4 sm:grid sm:grid-cols-2 sm:gap-6">
                        <img src="../../src/assets/test1.jpeg" alt="test me" class="w-full  rounded-xl sm:mr-6 lg:mr-8" />
                        <img src="../../src/assets/test1.jpeg" alt="test me" class="w-full  rounded-xl" />
                    </div>
                    <span class="font-bold text-2xl mb-4">Quantity</span>
                    <div id="quantity-ops" class="mb-4">
                        <button class="border border-black p-3 rounded-lg mr-4 hover:bg-blue-500 hover:border-none hover:text-white">
                            -
                        </button>
                        <span class="mr-4">int</span>
                        <button class="border border-black p-3 rounded-lg hover:bg-blue-500 hover:border-none hover:text-white">
                            +
                        </button>
                    </div>
                    <div id="importance">
                        <h2 class="font-bold mb-4 text-2xl">Sizes</h2>
                        <select id="cars" class="border border-black p-3 rounded-lg w-full mb-4 bg-none appearance-none" required>
                            <option value="" selected>-required-</option>
                            <option value="Extra-Small">XS</option>
                            <option value="Small">S</o ption>
                            <option value="Medium">M</option>
                            <option value="Large">L</option>
                            <option value="Extra-Large">XL</option>
                        </select>
                        <div class="mb-2">
                            <b class="mr-2">Available Stocks(Small):</b>25
                        </div>
                    </div>
                    <div id="product-price">
                        <h2 class="font-bold text-3xl mb-4">P500</h2>
                        <button class="bg-blue-500 text-white w-full p-4 rounded-lg font-bold mb-4 hover:bg-blue-600" onclick="addCart()">Add to Cart</button>
                    </div>
                </div>
            </aside>
            <aside id="page-recommendation">
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
                                <button class="bg-blue-500 p-4 px-12 rounded-xl text-white sm:p-2 md:p-3 hover:bg-blue-600" onclick="addCart()">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- stored as array -->
                </div>
            </aside>
        </main>
    </section>

    <script src="../sidemenu.js"></script>

</body>

</html>