<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <?php include "header.php"; ?>

    <header>
        <div id="welcome_message">
            <?php echo "Hello  XAVIER";?>
        </div>

        <div class="icon_section">
        <i class="fa-regular fa-bell"></i>
                    <img src="https://img.freepik.com/fotos-premium/negocios-personas-concepto-retrato-rostro-o-retrato-hombre-negocios-sonriente_380164-119773.jpg" alt="">
        </div>
    </header>


    <main>
        <article class="grad-primary">
            <div class="wallet_card ">
                <p>Your index</p>
                <h1>4.8</h1>
            </div>
        </article>
    </main>


    <style>
        <?php include "style.css";    ?>
    </style>
</body>

</html>