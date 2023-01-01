<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="../dist/main.css" rel="stylesheet" />
    <title>Update Password | E-Shop</title>
</head>

<body>
    <main class="bg-gradient-to-t from-white to-[#2E849F] h-screen w-screen flex items-center justify-center">
        <section class="bg-[#8ABFD0] sm:h-screen sm:w-screen sm:p-6 lg:p-12 sm:rounded-none lg:rounded-xl lg:w-fit lg:h-fit">
            <?php include('../PHP Database/messages.php'); ?>
            <header class="mb-4">
                <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2">Update Password!</h2>
            </header>
            <form action="../PHP Database/admin_forgot.php" method="POST" id="switchTab" class="w-full">
                <div class="flex flex-col">
                    <input type="password" name="password" placeholder="Enter New Password" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                    <input type="password" name="confirmPass" placeholder="Re-enter New Password" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                </div>
                <div id="options" class="mt-3">
                    <input type="submit" name="btn_update" value="Continue" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600" />
                </div>
            </form>
        </section>
    </main>

    <script src="./src/events.js"></script>

</body>

</html>