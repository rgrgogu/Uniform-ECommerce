<?php
require('./PHP Database/dbcon.php');
session_start();
$sql    = "SELECT * FROM uniform_db.product_list";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="./dist/main.css" rel="stylesheet" />
    <title>Home | E-Shop</title>
</head>

<body class="bg-gradient-to-t from-white to-[#2E849F]">
    <header id="navbar-container">
        <nav class="lg:container lg:mx-auto flex items-center justify-between sm:p-4 lg:p-6">
            <div id="logo" class="sm:w-40 lg:w-60">
                <a href="./">
                    <img src="./src/assets/plm-logo--with-header.png" alt="">
                </a>
            </div>
            <div id="search" class="w-96 sm:hidden lg:block">
                <div class="input-group relative flex flex-nowrap items-stretch w-full">
                    <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-tl-lg rounded-bl-lg m-0" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-tr-lg rounded-br-lg flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="sm:hidden lg:flex lg:items-center text-white">
                <div id="login" class="lg:mr-6 hover:text-blue-600">
                    <a href="./pages/login.php">
                        <button>Login</button>
                    </a>
                </div>
                <div id="register" class="lg:mr-6 hover:text-blue-600">
                    <a href="./pages/register.php">
                        <button>Register</button>
                    </a>
                </div>
            </div>
            <div id="menu" class="cursor-pointer lg:hidden">
                <span class="material-symbols-outlined pointer-events-none">
                    menu
                </span>
            </div>
        </nav>
        <aside id="sidebar" class="bg-blue-500 p-4 text-white sm:hidden">
            <div id="search" class="w-full mb-4">
                <div class="input-group relative flex flex-nowrap items-stretch w-full">
                    <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-tl-lg rounded-bl-lg transition ease-in-out m-0" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-tr-lg rounded-br-lg flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="register" class="sm:mb-2 hover:text-blue-700">
                <a href="./pages/login.php">
                    <button>Login</button>
                </a>
            </div>
            <div id="login" class="hover:text-blue-700">
                <a href="./pages/register.php">
                    <button>Register</button>
                </a>
            </div>
        </aside>
    </header>

    <!-- 
        linear = #2E849F #FFFFFF 
        solid = #2E849F
    -->

    <aside id="sidebar-menu" class="bg-[#2E849F] p-4 text-white sm:hidden lg:block">
        <section class="lg:container lg:mx-auto lg:flex lg:items-stretch lg:justify-around">
            <div id="page1" class="hover:text-purple-900">
                <a href="#">
                    <button>Home</button>
                </a>
            </div>
            <div id="page2" class="hover:text-purple-900">
                <a href="#">
                    <button>Order Online</button>
                </a>
            </div>
            <div id="page3" class="hover:text-purple-900">
                <a href="./pages/contacts.php">
                    <button>Contact Us</button>
                </a>
            </div>
            <div id="page4" class="hover:text-purple-900">
                <a href="./pages/FAQ.php">
                    <button>FAQs</button>
                </a>
            </div>
            <div id="page5" class="hover:text-purple-900">
                <a href="./pages/abouts.php">
                    <button>About Us</button>
                </a>
            </div>
        </section>
    </aside>

    <section class="sm:pt-1 lg:p-12">
        <?php include('./PHP Database/messages.php'); ?>
        <main class="lg:container lg:mx-auto grid sm:grid-cols-1 sm:p-4 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <div id="products " class="bg-white p-4">
                        <div id="uniform" class="mb-4">
                            <?php
                            echo "<img class='w-full rounded-xl object-cover h-[20rem]' src='./src/assets/" . $row['product_img'] . "' >";
                            ?>
                        </div>
                        <div id="productItems" class="flex flex-col items-center ">
                            <div class=" truncate">
                                <h2 class="font-bold text-2xl"><?php echo strtoupper($row['product_name']); ?></h2>
                            </div>
                            <div id="cart ">
                                <button class="bg-[#2E849F] p-4 px-12 rounded-xl text-white sm:p-2 md:p-3" onclick="redirect()">Add to Cart</button>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <!-- dynamic content starts here -->
        </main>
    </section>

    <!-- <section class="sm:pt-1 lg:p-12">
        <?php include('./PHP Database/messages.php'); ?>
        <main class="lg:container lg:mx-auto grid sm:grid-cols-1 sm:p-4 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div id="products">
                <div id="uniform" class="mb-4">
                    <a href="./pages/productpage.html">
                        <img src="./src/assets/test1.jpeg" alt="Uniform" class="w-full rounded-xl" />
                    </a>
                </div>
                <div id="productItems" class="flex items-start justify-between">
                    <div class="w-40 truncate">
                        <h2 class="font-bold text-2xl">Uniform</h2>
                        <p class="mb-2 mt-2">paragraph is paragraph</p>
                    </div>
                    <div id="cart">
                        <button class="bg-[#2E849F] p-4 px-12 rounded-xl text-white sm:p-2 md:p-3" onclick="redirect()">Add to Cart</button>
                    </div>
                </div>
            </div>
            dynamic content starts here
    </main>
    </section> -->

    <script src="./src/DOM.js"></script>
    <script src="./src/events.js"></script>

</body>

</html>