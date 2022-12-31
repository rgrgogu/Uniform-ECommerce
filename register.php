<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" /> 
    <link href="./dist/main.css" rel="stylesheet" />
    <title>Register | Uniforms</title>
</head>
<body>
    
    <main class="bg-gradient-to-t from-white to-[#2E849F] h-screen w-screen flex items-center justify-center">
        <section class="bg-[#8ABFD0] sm:h-screen sm:w-screen sm:p-6 lg:p-12 sm:rounded-none lg:rounded-xl lg:w-fit lg:h-fit">
            <header class="mb-4">
                <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2">Let's roll!</h2>
                <p class="sm:text-xs md:text-base">Create your account here</p>
            </header>
            <form id="switchTab" class="w-full">
                <div class="grid sm:grid-cols-1 lg:grid-cols-2 lg:gap-6">
                    <div class="flex flex-col">
                        <input type="text" placeholder="First Name" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                        <input type="tel" placeholder="Phone Number" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" onkeypress="return onlyNumberKey(event)" required /> 
                        <input type="password" placeholder="Password" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    </div>
                    <div class="flex flex-col">
                        <input type="text" placeholder="Last Name" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                        <input type="email" placeholder="Email" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required /> 
                        <input type="password" placeholder="Confirm Password" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    </div>
                </div>
                <a href="./login.html" class="">
                    Already have account? Login
                </a>
                <div id="options" class="mt-3">
                    <input type="submit" value="Continue" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600" />
                </div>
            </form>
        </section>
    </main>

    <script src="./src/events.js"></script>

</body>
</html>