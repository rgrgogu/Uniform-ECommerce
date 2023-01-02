<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="../dist/main.css" rel="stylesheet" />
    <title>Add Product | E-Shop</title>
</head>

<body>
    <main class="bg-gradient-to-t from-white to-[#2E849F] h-screen w-screen flex items-center justify-center">
        <section class="bg-[#8ABFD0] sm:h-screen sm:w-screen sm:p-6 lg:p-12 sm:rounded-none lg:rounded-xl lg:w-fit lg:h-fit">
            <?php include('../PHP Database/messages.php'); ?>
            <header class="mb-4">
                <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2">Add Product</h2>
                <p class="sm:text-xs md:text-base">Enter details of product you wish to add</p>
            </header>
            <form action="../PHP Database/product_add.php" method="POST" id="switchTab" class="w-full" enctype="multipart/form-data">
                <div class="flex flex-col">
                    <input type="text" name="product_name" placeholder="Product Name" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    <label for="">EXTRA-SMALL</label>
                    <div class="flex flex-row">
                        <input type="number" name="xs" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                        <input type="number" name="price_xs" placeholder="Extra Small Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    </div>
                    <label for="">SMALL</label>
                    <div class="flex flex-row">
                        <input type="number" name="sm" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                        <input type="number" name="price_sm" placeholder="Small Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    </div>
                    <label for="">MEDIUM</label>
                    <div class="flex flex-row">
                        <input type="number" name="md" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                        <input type="number" name="price_md" placeholder="Medium Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    </div>
                    <label for="">LARGE</label>
                    <div class="flex flex-row">
                        <input type="number" name="lg" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                        <input type="number" name="price_lg" placeholder="Large Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    </div>
                    <label for="">EXTRA-LARGE</label>
                    <div class="flex flex-row">
                        <input type="number" name="xl" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                        <input type="number" name="price_xl" placeholder="Extra Large Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    </div>
                    <input type="file" name="product_img" placeholder="Insert product image" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" required />
                </div>
                <div id="options" class="mt-3">
                    <input type="submit" name="btn_add_prd" value="Continue" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600" />
                </div>
            </form>
        </section>
    </main>

    <script src="./src/events.js"></script>

</body>

</html>