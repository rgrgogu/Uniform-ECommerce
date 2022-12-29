<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" /> 
    <link href="./dist/main.css" rel="stylesheet" />
    <title>Login | Uniforms</title>
</head>
<body>
    
    <main class="bg-blue-500 h-screen w-screen flex items-center justify-center text-center">
        <section class="bg-white sm:h-screen sm:w-screen sm:p-6 lg:p-12 sm:rounded-none lg:rounded-xl lg:w-fit lg:h-fit">
            <header class="mb-4">
                <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2">Welcome!</h2>
                <p class="sm:text-xs md:text-base">Sign In with your email and password below</p>
            </header>
            <form class="w-full flex flex-col items-stretch">
                <input type="email" placeholder="Email" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" />
                <input type="password" placeholder="Password" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" />
                <a href="" class="self-end mb-4">
                    <span class="text-blue-600">Forgot password?</span>
                </a>  
                <div id="options">
                    <button type="submit" class="bg-blue-500 w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600 mb-4">Login</button>
                    <a href="./register.html" class="bg-blue-500 w-full block p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600">
                        Register
                    </a>
                </div>
            </form>
        </section>
    </main>

    <script src="./src/events.js"></script>

</body>
</html>