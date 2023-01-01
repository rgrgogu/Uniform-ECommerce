<?php
session_start();
include('../PHP Database/dbcon.php');

    if (isset($_POST['btn_update_prd'])) {

        $id = $_POST['product_id'];

        $name = $_POST['product_name'];

        $category = $_POST['product_category'];

        $stocks = $_POST['product_stocks'];

        $fee = $_POST['product_price'];
    
        $sql = "UPDATE `product_list` SET `product_name`= '$name', `product_category` = '$category', `product_stocks`='$stocks', `product_price`='$fee' WHERE `product_id`='$id'"; 

        $result = $con->query($sql); 

        if ($result == TRUE) {
            $_SESSION['message'] = "Record Updated Successfully";
            header('Location: product_management.php');
            exit(0);
        }else{

            $_SESSION['message'] = "Something Went Wrong";
            header('Location: update_del_product.php');
            exit(0);

        }

    } 
    if (isset($_GET['product_id'])) {

        $id = $_GET['product_id']; 
    
        $sql = "SELECT * FROM `product_list` WHERE `product_id`='$id'";
    
        $result = $con->query($sql);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['product_id'];

            $name = $row['product_name'];

            $category = $row['product_category'];

            $stocks = $row['product_stocks'];

            $fee = $row['product_price'];

        
    } 

   

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
                <h2 class="sm:text-2xl lg:text-4xl font-bold mb-2">Update A Product</h2>
                <p class="sm:text-xs md:text-base">Enter details of product you wish to change</p>
            </header>
            <form action="update_product.php" method="POST" id="switchTab" class="w-full"  enctype="multipart/form-data">
                <div class="flex flex-col">
                    <input type="text" name="product_name" value="<?php echo $name; ?>"  placeholder="Product Name" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                    <input type="text" name="product_category" value="<?php echo $category; ?>"  placeholder="Product Category" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    <input type="number" name="product_stocks"  value="<?php echo $stocks; ?>" placeholder="No. of Stocks" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    <input type="number" name="product_price"  value="<?php echo $fee; ?>" placeholder="Price" class="border border-black p-3 px-4 rounded-lg mb-4 placeholder-shown:border-blue-600" autocomplete="off" required />
                    
                </div>
                <div id="options" class="mt-3">
                    <input type="submit" name="btn_update_prd" value="Continue" class="bg-[#2E849F] w-full p-3 rounded-lg text-white cursor-pointer font-bold hover:bg-blue-600" />
                </div>
            </form>
        </section>
    </main>

    <script src="./src/events.js"></script>

</body>

</html>
<?php 

    } 
    else{ 

        header('Location: product_management.php');

    } 
    }
?>