<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" /> 
    <link href="../dist/main.css" rel="stylesheet" />
    <title>Uniform - buy now</title>
</head>
<body class="bg-gradient-to-t from-white to-[#2E849F] h-screen">
    
    <header id="navbar-container" class="">
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
                <div id="login" class="lg:mr-4 block">
                    <button class="bg-blue-500 hover:bg-blue-600 rounded-full p-2 material-symbols-outlined text-white">
                        account_circle                         
                    </button>
                </div>
                <div id="cart" class="lg:mr-4">
                    <a href="./pages/cart.php" class="material-symbols-outlined text-3xl cursor-pointer">
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
                <div id="login" class="lg:mr-4">
                    <button class="bg-blue-500 hover:bg-blue-600 rounded-full p-2 material-symbols-outlined text-white">
                        account_circle                         
                    </button>
                </div>
                <div id="cart" class="sm:ml-2">
                    <a href="./pages/cart.php" class="material-symbols-outlined text-3xl cursor-pointer">
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
                <a href="./pages/contacts.php">
                    <button>Contact Us</button>
                </a>
            </div>
            <div id="page4" class="hover:text-purple-900">
                <a href="./pages/faq.php">
                    <button>FAQs</button>
                </a>
            </div>
            <div id="page5" class="hover:text-purple-900">
                <a href="./pages/abouts.php">
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
    <aside id="sidebar-desktop" class="flex items-end flex-col lg:container lg:mx-auto absolute top-20 right-14 z-20 sm:hidden">
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
                <a href="./pages/contacts.php">
                    <button>Contact Us</button>
                </a>
            </div>
            <div id="page4" class="hover:text-purple-900">
                <a href="./pages/faq.php">
                    <button>FAQs</button>
                </a>
            </div>
            <div id="page5" class="hover:text-purple-900">
                <a href="./pages/abouts.php">
                    <button>About Us</button>
                </a>
            </div>
            <div id="login" class="hover:text-blue-700">
                <a href="../">
                    <button>Log Out</button>
                </a>
            </div>
        </section>
    </aside>

    <section class="sm:pt-1 lg:p-12">
        <main class="lg:container lg:mx-auto grid sm:grid-cols-1 sm:p-4 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div id="products">
                <div id="uniform" class="mb-4">
                    <a href="./pages/productpage.php">
                        <img src="../src/assets/test1.jpeg" alt="Uniform" class="w-full rounded-xl"/>
                    </a>
                </div>
                <div id="productItems" class="flex items-start justify-between">
                    <div class="w-40 truncate">
                        <h2 class="font-bold text-2xl">Uniform</h2>
                        <p class="mb-2 mt-2">paragraph is paragraph</p>
                    </div>
                    <div id="cart">
                        <button class="bg-blue-500 p-4 px-12 rounded-xl text-white sm:p-2 md:p-3" onclick="addCart()">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- dynamic content starts here -->
        </main>
    </section>


    <script src="./sidemenu.js"></script>

</body>
</html>