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
    <link rel="stylesheet" href="./style/style.css">
    <style>
            #how-it-works {
        padding: 50px 0;
        text-align: center;
        }

        #how-it-works h1 {
        font-size: 10REM;
        margin-bottom: 30px;
        }

        .div-about {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        }

        .step {
        width: 300px;
        padding: 20px;
        border: 2px solid blueviolet;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        }

        .step:hover {
        transform: translateY(-5px);
        }

        .step h2 {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: blueviolet;
        }

        .step p {
        font-size: 1.1rem;
        }

        /* Image styling */
        .step img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 10px;
        }
        #explore-services {
  text-align: center;
  padding: 50px 0;
}

.image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 70px;
  margin-bottom: 40px;
}

.image-wrapper {
  position: relative;
  width: 250px;
  height: 250px;
  overflow: hidden;
}

.service-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease-in-out;
}

.image-wrapper:hover .service-image {
  transform: scale(1.1);
}

.image-wrapper:hover .service-image:first-child {
  transform: translateX(120%);
}

.image-wrapper:hover .service-image:last-child {
  transform: translateX(-120%);
}

.explore-btn {
  background-color: blueviolet;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 1.2rem;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.explore-btn:hover {
  background-color: darkviolet;
}
#start-working {
  text-align: center;
  padding: 50px 0;
}

#start-working h1 {
  font-size: 100PX;
  margin-bottom: 20px;
}

#start-working p {
  font-size: 1.2rem;
  margin-bottom: 20px;
}

#start-working .action_btn {
  background-color: blueviolet;
  color: white;
  padding: 10px 20px;
  font-size: 1.2rem;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

#start-working .action_btn:hover {
  background-color: darkviolet;
}

#start-working a {
  color: blueviolet;
  text-decoration: none;
}

#start-working a:hover {
  text-decoration: underline;
}


    </style>
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
    <input type="text" name="search" placeholder="Search services..." required style="position: relative;">
        <button type="submit" style="border-radius: 10px; background-color: white; border: 2px solid purple; color: black;">Search</button>
    </form>
</div>
        </section>

    </main>

    <br><br>
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
        <section id="explore-services">
            <h1 id="h1-heroe-main">Explore services</h1>
            <div class="image-container">
                <div class="image-wrapper">
                    <img src="/TakeABreath/assets/img/plumbing1.jpg" alt="Service 1" class="service-image">
                </div>
                <div class="image-wrapper">
                    <img src="/TakeABreath/assets/img/tech.jpeg" alt="" class="service-image">
                </div>
                <div class="image-wrapper">
                    <img src="/TakeABreath/assets/img/img.jpg" alt="Service 3" class="service-image">
                </div>
            </div>
            <a href="service.php" class="explore-btn">Explore Now</a>
        </section>
        <div id="start-working">
            <h1 id="h1-heroe-main">Work with us</h1>
            <p>Join our platform to start offering your services and connecting with clients. Whether you're a
                professional looking for work or an expert in your field, we've got opportunities waiting for you.</p>

            <p class="more">Want to learn more about our platform? <br><a href="addservice.php">Click here</a></p>
        </div>
        <div id="feedbackDisplay">
            <h1 id="h1-heroe-main">Feedback</h1>
            <?php require 'feedbackDisplay.php'?>
        </div>
    </section>
    <br>
    <br>
    <?php require'footer.php'?>


   
</body>

<script src="./assets/js/script.js"></script>

</html>