<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./dist/main.css" rel="stylesheet" />
    <title>Login | Uniforms</title>
</head>
<body>

    <!-- 
        linear = #2E849F #FFFFFF 
        solid = #2E849F
    -->

    <main class="bg-gradient-to-t from-white to-[#2E849F] h-screen w-screen flex items-center justify-center text-center">
        <section class="bg-[#8ABFD0] sm:h-screen sm:w-screen sm:p-6 lg:p-12 sm:rounded-none lg:rounded-xl lg:w-fit lg:h-fit">
            <!-- <div id="logo" class="sm:hidden xl:block absolute top-[3.5rem] left-[39.375rem]">
                <span class="before:font-['Font_Awesome_5_Free'] before:content-['\f0e0'] before:bg-[#2E849F] before:p-6 before:text-6xl before:rounded-full text-white"></span>
            </div> -->
            <header class="mb-4">
                <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2 ">Welcome!</h2>
                <p class="sm:text-xs md:text-base">Sign In with your email and password below</p>
            </header>
            <form class="w-full flex flex-col items-stretch">
                <input type="email" placeholder="Email" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" />
                <input type="password" placeholder="Password" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" />
                <a href="" class="self-end mb-4">
                    <span class="">Forgot password?</span>
                </a>  
                <div id="options">
                    <button type="submit" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600 mb-4">Login</button>
                    <a href="./register.html" class="bg-[#2E849F] w-full block p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600">
                        Register
                    </a>
                </div>
            </form>
        </section>
    </main>

    <script src="./src/events.js"></script>

</body>
</html>