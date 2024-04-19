<!DOCTYPE html>
<html lang="en">
<?php include 'db/db_config.php';?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@200&family=Poppins:wght@200&family=Roboto+Mono:wght@140&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">
        <title>TakeABreath</title>
    <link rel="stylesheet" href="./assets/style/style.css">

</head>

<body>
    <?php require'header.php'?>
    <div class="blue_violet_background"></div>
    <main>
        <div class="blob" id="div-home">
        </div>
        <section id="hero">
            <h2>
                Welcome to
            </h2>
            <h1>TakeAbreath</h1>
            <div class="search-bar">
    <form action="search_service.php" method="get">
        <input type="text" name="search" placeholder="Search services...">
        <button type="submit">Search</button>
    </form>
</div>
        </section>

    </main>

    <br><br><br>
    <section id="hero-main">
       <section id="how-it-works">
            <h1 id="h1-heroe-main">How it works? </h1>
            <div class="div-about" id="div-about">
                <div class="step">
                    <h2>Step 1: Sign Up</h2>
                    <p>Create an account with TakeAbreath to get started. It only takes a few minutes!</p>
                </div>
                <div class="step">
                    <h2>Step 2: Explore Services</h2>
                    <p>Browse through our wide range of services including plumbing, electrician, cleaning, and
                        woodwork.</p>
                </div>
                <div class="step">
                    <h2>Step 3: Book a Service</h2>
                    <p>Once you've found the service you need, simply book it through our platform. It's quick and
                        easy!</p>
                </div>
                <div class="step">
                    <h2>Step 4: Enjoy!</h2>
                    <p>Sit back, relax, and let our professionals take care of your needs. Enjoy a hassle-free
                        experience with TakeAbreath.</p>
                </div>
            </div>
        </section>
        <h1 id="h1-heroe-main">Want to start working?</h1>
        <div>
        <!-- <?php require'addservice.php'?> -->
        </div>
    <!-- <?php require'feedback.php'?> -->
    </section>
    <br>
    <br>
    <?php require'footer.php'?>


   
</body>

<script src="./assets/js/script.js"></script>

</html>