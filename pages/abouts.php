<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" /> 
    <link href="../dist/main.css" rel="stylesheet" />
    <title>Uniform | Abouts</title>
</head>
<body class="bg-gradient-to-t from-white to-[#2E849F]">
    
    <header id="navbar-container">
        <nav class="lg:container lg:mx-auto flex items-center justify-between sm:p-4 lg:p-6">
            <div id="logo" class="sm:w-40 lg:w-60">
                <a href="../">
                    <img src="../src/assets/plm-logo--with-header.png" alt="">
                </a>
            </div>
            <div id="search" class="w-96 sm:hidden lg:block">
                <div class="input-group relative flex flex-nowrap items-stretch w-full">
                  <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-tl-lg rounded-bl-lg transition ease-in-out m-0" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                  <button class="btn px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-tr-lg rounded-br-lg flex items-center">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                  </button>
                </div>
            </div>
            <div class="sm:hidden lg:flex lg:items-center">
                <div id="login" class="lg:mr-6">
                    <a href="../login.php">
                        <button>Login</button>
                    </a>
                </div>
                <div id="register" class="lg:mr-6">
                    <a href="../register.php">
                        <button>Register</button>
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
            <div id="register" class="sm:mb-2">
                <a href="../register.php">
                    <button>Register</button>
                </a>
            </div>
            <div id="login" class="">
                <a href="../login.php">
                    <button>Log In</button>
                </a>
            </div>
        </aside>
        <aside id="sidebar-menu" class="bg-[#2E849F] p-4 text-white sm:hidden lg:block">
            <section class="lg:container lg:mx-auto lg:flex lg:items-stretch lg:justify-around">
                <div id="page1" class="hover:text-purple-900">
                    <a href="../">
                        <button>Home</button>
                    </a>
                </div>
                <div id="page2" class="hover:text-purple-900">
                    <a href="../">
                        <button>Order Online</button>
                    </a>
                </div>
                <div id="page3" class="hover:text-purple-900">
                    <a href="../pages/contacts.php">
                        <button>Contact Us</button>
                    </a>
                </div>
                <div id="page4" class="hover:text-purple-900">
                    <a href="../pages/FAQ.php">
                        <button>FAQs</button>
                    </a>
                </div>
                <div id="page5" class="hover:text-purple-900">
                    <a href="">
                        <button>About Us</button>
                    </a>
                </div>
            </section>
        </aside>
    </header>

    <main id="bulletin" class="sm:p-6 lg:p-12">
        <aside class=" flex items-center flex-col lg:container lg:mx-auto">
            <header>
                <h2 class="font-bold text-4xl mb-4">About Us</h2>
            </header>
            <!-- NO CONTENTS -->
            <!-- <div id="dropdown-menu">
                <div class="border-inherit shadow-xl p-6 md:w-[30rem] lg:w-[40rem] rounded-xl cursor-pointer">
                    <div id="dropdown" class="flex items-center justify-between">
                        <span class="font-bold text-xl">Shipping & Delivery</span>
                        <i class="material-symbols-outlined">expand_more</i>
                    </div>
                    <div id="drop-content" class="sm:hidden">
                        <h2>How long before my orders get delivered?</h2>
                        <p>Standard Shipping: Metro Manila - 1 to 3 working days</p>
                        <p>Provincial Areas - 7 to 14 working days</p>
                    </div>
                </div>
                <div class="border-inherit shadow-xl p-6 md:w-[30rem] lg:w-[40rem] rounded-xl cursor-pointer">
                    <div id="dropdown2" class="flex items-center justify-between">
                        <span class="font-bold text-xl">Payment Methods</span>
                        <i class="material-symbols-outlined">expand_more</i>
                    </div>
                    <div id="drop-content2" class="sm:hidden">
                        <h2 class="font-bold">GCASH: (+63)967-205-2107</h2>
                        <p>Send screenshot of payment thru out email: plmcoop@plm.edu.ph</p>
                        <h2 class="font-bold">Cash on Delivery</h2>
                        <h2 class="font-bold">Store Pick Up</h2>
                        <p>Present the QR Code that given to you by our staffs</p>
                    </div>
                </div>
            </div> -->
        </aside>
    </main>

    <script src="../src/DOM.js"></script>
</body>
</html>