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

<style>@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap');

* {
    font-family: "Unbounded";
    font-weight: 400;
}

</style>

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
        <article class="wallet_card grad-primayr">
                <div class="dflex">
                <p>Your score:</p>
                <img src="../design/icons/light-icon.svg" alt="" width="25px">
                </div>
                <h1>4.8</h1>
                <small>(Above average)</small>
        </article>
        
        <article class="important-kpi">
            <h2>
              Important <strong>KPIs</strong> <i class="fas fa-arrow-right"></i>
            </h2>

            <section>
            <?php $_SESSION['mail'];
            include_once "../classes/kpi.class.php"; 
                    $kpi = new KPICalculator; ?>
<div class="dflex">
<article class=" grad-secondary wallet_card_kpi">
                <div class="dflex">
                <p>Your debt to income ratio:</p>
                </div>
                <h1><?php echo $kpi->DTI(4000, 5000). "%";?></h1>
                <small>(Above average)</small>

</article>
<article class=" grad-secondary wallet_card_kpi">
                <div class="dflex">
                <p>Your saving rate score::</p>
                </div>
                <h1>                    <?php echo $kpi->SavingsRate(4000, 1000). "%" ?></h1>
                <small>(Above average)</small>

</article>




</div>         </section>
        </article>
    </main>


    <style>
        <?php include "../design/style.css"; ?>
    </style>
</body>

</html>