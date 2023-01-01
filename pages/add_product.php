<?php
session_start();
include('../PHP Database/dbcon.php');
if (isset($_POST['btn_add_prd'])) {

  $name = $_POST['product_name'];
  $category = $_POST['product_category'];
  $stocks = $_POST['product_stocks'];
  $price = $_POST['product_price'];
  $prod_image = $_FILES['product_img']['name'];
  $target = "../src/assets/". basename($prod_image);


  $sql = "INSERT INTO uniform_db.product_list(`product_name`,`product_category`, `product_stocks`,`product_price`,`product_img`) VALUES ('$name','$category','$stocks','$price','$prod_image')";

  mysqli_query($con, $sql);
  if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target)) {
    $_SESSION['message'] = "Services Added Successfully";
    header('Location: product_management.php');
    exit(0);
  } else {
    $_SESSION['message'] = "Something Went Wrong";
    header('Location: add_product.php');
    exit(0);
  }
}
$result = mysqli_query($con, "SELECT * FROM product_list");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="../dist/main.css" rel="stylesheet" />
    <title>Forgot Password | E-Shop</title>
</head>

<body>
    <main class="bg-gradient-to-t from-white to-[#2E849F] h-screen w-screen flex items-center justify-center">
        <section class="bg-[#8ABFD0] sm:h-screen sm:w-screen sm:p-6 lg:p-12 sm:rounded-none lg:rounded-xl lg:w-fit lg:h-fit">
            <?php include('../PHP Database/messages.php'); ?>
            <header class="mb-4">
                <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2">Add Product</h2>
                <p class="sm:text-xs md:text-base">Enter details of product you wish to add</p>
            </header>
            <form action="add_product.php" method="POST" id="switchTab" class="w-full"  enctype="multipart/form-data">
                <div class="flex flex-col">
                    <input type="text" name="product_name" placeholder="Product Name" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    <input type="text" name="product_category" placeholder="Product Category" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    <input type="number" name="product_stocks" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    <input type="number" name="product_price" placeholder="Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    <input type="hidden" required name="size" value="1000000">
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