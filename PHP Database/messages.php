<?php
if (isset($_SESSION['message'])) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
        <link href="../dist/main.css" rel="stylesheet" />
    </head>
    <body>
        <div class="bg-yellow-200 p-4 flex items-center mb-4 justify-between rounded-lg" role="alert">
            <div id="header" class="inline-block">
                <h2 class="font-bold text-2xl">Hey User</h2>
                <span>
                    <?= $_SESSION['message'] ?>
                </span>
            </div>
            <div id="message">
                <button type="button" class="material-symbols-outlined text-3xl" aria-label="close">cancel</button>
            </div>
        </div>
    </body>
<?php
    unset($_SESSION['message']);
}
?>