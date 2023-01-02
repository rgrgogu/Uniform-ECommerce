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
    <main class="bg-gradient-to-t from-white to-[#2E849F] flex items-center justify-center h-screen">
        <section class="bg-[#8ABFD0] sm:h-screen sm:w-screen lg:h-fit lg:w-fit sm:p-6 lg:p-12 sm:rounded-none lg:rounded-xl ">
            <?php include('../PHP Database/messages.php'); ?>
            <form action="../PHP Database/product_add.php" method="POST" id="switchTab" class="" enctype="multipart/form-data">
                <header class="mb-4">
                    <div id="add-product" class="mb-2">
                        <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2">Add Product</h2>
                        <p class="sm:text-xs md:text-base">Enter details of product you wish to add</p>
                    </div>
                    <div id="">
                        <input type="text" pattern="^[\S]+$" title="Must be no space character between words. Use _ or - symbol instead!" name="product_name" placeholder="Product Name" class="border border-black p-3 px-4 rounded-lg placeholder-shown:border-blue-600 w-full" autocomplete="off" />
                    </div>
                </header>
                <div class="grid sm:grid-cols-1 lg:grid-cols-3 w-[70rem]" id="parent">
                    <div class="">
                        <div>
                            <label for="">EXTRA-SMALL</label>
                        </div>
                        <div class="">
                            <input type="number" min="1" name="xs" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                            <input type="number" min="1" name="price_xs" placeholder="Extra Small Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" />
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="">SMALL</label>
                        </div>
                        <div class="">
                            <input type="number" min="1" name="sm" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" />
                            <input type="number" min="1" name="price_sm" placeholder="Small Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" />
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="">MEDIUM</label>
                        </div>
                        <div class="">
                            <input type="number" min="1" name="md" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4 w-full" autocomplete="off" required />
                            <input type="number" min="1" name="price_md" placeholder="Medium Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 w-full" autocomplete="off" required />
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="">LARGE</label>
                        </div>
                        <div class="">
                            <input type="number" min="1" name="lg" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                            <input type="number" min="1" name="price_lg" placeholder="Large Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="">EXTRA-LARGE</label>
                        </div>
                        <div class="">
                            <input type="number" min="1" name="xl" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 mr-4" autocomplete="off" required />
                            <input type="number" min="1" name="price_xl" placeholder="Extra Large Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="">IMAGE</label>
                        </div>
                        <div>
                            <input type="file" name="product_img" placeholder="Insert product image" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600 w-full" required />
                        </div>
                    </div>
                </div>
                <div id="options" class="mt-3" aria-disabled="true">
                    <input type="submit" name="btn_add_prd" value="Continue" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600" />
                </div>
            </form>
        </section>
    </main>

    <script src="./src/events.js"></script>

</body>

</html>