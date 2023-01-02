<?php
require('./PHP Classes/AdminInfo.php');
session_start();
$newAdmin = $_SESSION['object'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="../dist/main.css" rel="stylesheet" />
    <title>My Profile | Uniform</title>
</head>

<body class="bg-gradient-to-t from-white to-[#2E849F]">
    <header id="navbar-container">
        <nav class="lg:container lg:mx-auto flex items-center justify-between sm:p-4 lg:p-6">
            <div id="logo" class="sm:w-40 lg:w-60">
                <a href="./">
                    <img src="../src/assets/plm-logo--with-header.png" alt="">
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
                <div class="sm:hidden lg:flex lg:items-center">
                    <div id="home" class="lg:mr-6">
                        <a href="./order_management.php">
                            <button class="text-white">Home</button>
                        </a>
                    </div>
                    <div id="login" class="lg:mr-6">
                        <a href="./profiles.php">
                            <button class="text-white">My Profile</button>
                        </a>
                    </div>
                    <div id="register" class="lg:mr-6">
                        <a href="../index.php">
                            <button class="text-white">Logout</button>
                        </a>
                    </div>
                    <!-- <div id="cart" class="">
                    <span class="material-symbols-outlined text-3xl cursor-pointer">
                        shopping_bag
                    </span>
                </div> -->
                </div>
                <div id="menu" class="cursor-pointer lg:hidden">
                    <span class="material-symbols-outlined pointer-events-none">
                        menu
                    </span>
                </div>
            </div>
            <div class="lg:hidden flex items-center">
                <div id="home" class="lg:mr-6">
                    <a href="./order_management.php">
                        <button class="text-white">Home</button>
                    </a>
                </div>
                <div id="login" class="lg:mr-6">
                    <a href="./profiles.php">
                        <button class="text-white">My Profile</button>
                    </a>
                </div>
                <div id="register" class="lg:mr-6">
                    <a href="../index.php">
                        <button class="text-white">Logout</button>
                    </a>
                </div>
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
            <div id="home" class="lg:mr-6">
                <a href="./order_management.php">
                    <button class="text-white">Home</button>
                </a>
            </div>
            <div id="register" class="sm:mb-2">
                <a href="./profiles.php">
                    <button class="text-white">My Profile</button>
                </a>
            </div>
            <div id="login" class="">
                <a href="../login.php">
                    <button class="text-white">Log In</button>
                </a>
            </div>
        </aside>
    </header>

    <section class="sm:pt-2 sm:p-6 lg:p-12">
        <?php include('../PHP Database/messages.php'); ?>
        <aside class="lg:container lg:mx-auto flex items-center lg:max-w-3xl">
            <div id="profile">
                <div id="top-banner" class="flex items-center sm:flex-col lg:flex-row mb-4">
                    <div id="img-user">
                        <img src="../src/assets/profile.png" class="w-20 rounded-full object-cover mr-4" />
                    </div>
                    <div id="user">
                        <h2 class="font-bold text-xl">MY PROFILE</h2>
                        <p>Manage your account by updating some information</p>
                    </div>
                </div>
                <div id="two-selector" class="grid sm:grid-cols-1 gap-6">
                    <form id="right-panel-dot" class="lg:col-span-2" action="../PHP Database/admin_edit.php" method="POST">
                        <div id="information">
                            <label class="font-bold">First Name</label>
                            <input type="text" name="fName" class="border border-black p-3 px-4 rounded-lg mb-4 w-full mt-2" value="<?php echo $newAdmin->getFirstName(); ?>" />
                            <label class="font-bold">Last Name</label>
                            <input type="text" name="lName" class="border border-black p-3 px-4 rounded-lg mb-4 w-full mt-2" value="<?php echo $newAdmin->getLastName(); ?>" />
                            <label class="font-bold">Email Address</label>
                            <input type="email" class="border border-black p-3 px-4 rounded-lg mb-4 w-full mt-2" value="<?php echo $newAdmin->getEmail(); ?>" disabled />
                            <label class="font-bold">Contact Number</label>
                            <input type="tel" name="contact" class="border border-black p-3 px-4 rounded-lg mb-4 w-full mt-2" value="<?php echo $newAdmin->getContact(); ?>" />
                            <label class="font-bold">Password</label>
                            <input type="password" name="pass" placeholder="First Name" class="border border-black p-3 px-4 rounded-lg mb-4 w-full mt-2" value="<?php echo $newAdmin->getPassword(); ?>" />
                            <input type="submit" name="btn_edit" value="Update Profile" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600 sm:mb-2" />
                        </div>
                    </form>
                </div>
            </div>
        </aside>
    </section>
    <script src="./sidemenu.js"></script>
</body>

</html>