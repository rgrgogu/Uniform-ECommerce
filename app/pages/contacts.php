<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../dist/main.css" rel="stylesheet" />
    <title>Uniform | Contacts</title>
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
                    <button class="bg-blue-500 hover:bg-blue-600 rounded-full p-2 material-symbols-outlined text-white">
                        account_circle                         
                    </button>
                </div>
                <div id="cart" class="lg:mr-4">
                    <a href="./pages/cart.html" class="material-symbols-outlined text-3xl cursor-pointer">
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
                    <a href="./profiles.html" class="bg-blue-500 hover:bg-blue-600 rounded-full p-2 material-symbols-outlined text-white">
                        account_circle                         
                    </a>
                </div>
                <div id="cart" class="sm:ml-2">
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
                <a href="">
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
    <aside id="sidebar-desktop" class="flex items-end flex-col lg:container lg:mx-auto absolute top-20 right-14 z-20 sm:hidden">
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
                <a href="contacts.php">
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
        </section>
    </aside>

    <main id="bulletin" class="sm:p-6 lg:p-12">
        <aside class="lg:container lg:mx-auto bg-[#8ABFD0] sm:p-6 lg:p-12 rounded-xl grid lg:grid-cols-2 sm:grid-cols-1 lg:gap-6">
            <div id="left-panel">
                <header class="mb-2">
                    <h2 class="text-3xl font-bold mb-2">Get in touch</h2>
                    <p class="mb-2">If you have any concerns, questions, or suggestions on our product offerings, you may fillout our feedback form.</p>
                    <span>How can we help?</span>
                </header>
                <form>
                    <input type="text" placeholder="Enter your name" class="p-3 px-4 rounded-lg mb-4 border-none w-full text-black" autocomplete="off" required />
                    <input type="email" placeholder="Enter your email address" class="p-3 px-4 rounded-lg mb-4 border-none w-full text-black" autocomplete="off" required />
                    <textarea id="w3review" class="border border-black p-3 px-4 rounded-lg mb-4 border-none w-full text-black" autocomplete="off" required>Feedbacks or concerns</textarea>
                    <input type="submit" value="Submit" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600 sm:mb-2" />
                </form>
            </div>
            <div id="right-panel">
                <div class="place-content-start">
                    <div class="mb-2">
                        <span class="lg:text-xl mb-2 block">For General Inquires and Other Concerns</span>
                        <p class="lg:text-lg font-bold">(+63)908-859-7995</p>
                        <p class="lg:text-lg font-bold">(+63)995-789-4536</p>
                    </div>
                    <div class="mb-2">
                        <span class="lg:text-xl mb-2 block">For Online Order Concerns</span>
                        <p class="before:font-['Font_Awesome_5_Free'] before:content-['\f095'] before:bg-white before:p-2 before:mr-2 before:rounded-full lg:text-lg font-bold">(+63)925-899-1595</p>
                    </div>
                    <div>
                        <span class="lg:text-xl mb-2 block">or via Email</span>
                        <p class="before:font-['Font_Awesome_5_Free'] before:content-['\f0e0'] before:bg-white before:p-2 before:mr-2 before:rounded-full lg:text-lg font-bold">(+63)908-859-7995</p>
                    </div>
                </div>
            </div>
        </aside>
    </main>

    <script src="../sidemenu.js"></script>
</body>
</html>