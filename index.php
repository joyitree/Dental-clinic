<?php

$conn = mysqli_connect('localhost','root','','pearl1') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pearls</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- bootstarp cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">

    <!-- custom css link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts-->
    <header class="header fixed-top">

        <div class="container">

            <a href="#home" class="logo"><span>Pearls</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#review">review</a>
                <a href="#contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">make appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>

        </div>

    </header>
    <!-- header section ends -->
    <!-- home section starts -->
    <secttion class="home" id="home">
        <div class="content">
            <h3>let us brighten your smile</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consectetur quis nihil ullam explicabo. Veritatis, eum fuga.
                Sed deleniti, officia a sint accusamus quis reprehenderit quasi
                obcaecati, aut, voluptates sit amet?</p>

            <a href="#contact" class="link-btn">make appointment</a>
        </div>
        <div class="image">
            <img src="picture/home-bg.jpg">
        </div>

    </secttion>
    <!-- home section ends -->
    <!-- about section starts -->
    <section class="about" id="about">
        <div class="row">
            <div class="image">
                <img src="picture/about-img.jpg" alt="">
            </div>
            <section class="wb">
                <span>about us</span>
                <h3>True Health Care For Your Family</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet corporis impedit consequatur
                    obcaecati maxime perspiciatis aut perferendis ut, magnam, natus unde dolor illum similique quasi
                    culpa tempore dolorem. Dolor, nam!
                </p>
                <a href="#contact" class="link-btn">make appointment</a>
            </section>
    </section>
    <!-- about section ends -->
    <!-- service section starts -->
    <section class="services" id="services">
        <h1 class="heading">our services</h1>

        <div class="box-container container">
            <div class="box">
                <img src="picture/icon-1.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus accusamus provident sit
                    consequatur qui enim culpa necessitatibus ab,</p>
            </div>

            <div class="box">
                <img src="picture/icon-2.svg" alt="">
                <h3>Cosmetic densitry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus accusamus provident sit
                    consequatur qui enim culpa necessitatibus ab,</p>
            </div>

            <div class="box">
                <img src="picture/icon-3.svg" alt="">
                <h3>Oral hygiene experts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus accusamus provident sit
                    consequatur qui enim culpa necessitatibus ab,</p>
            </div>

            <div class="box">
                <img src="picture/icon-4.svg" alt="">
                <h3>Root canal specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus accusamus provident sit
                    consequatur qui enim culpa necessitatibus ab,</p>
            </div>

            <div class="box">
                <img src="picture/icon-5.svg" alt="">
                <h3>Live dental advisory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus accusamus provident sit
                    consequatur qui enim culpa necessitatibus ab,</p>
            </div>

            <div class="box">
                <img src="picture/icon-6.svg" alt="">
                <h3>Cavity inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus accusamus provident sit
                    consequatur qui enim culpa necessitatibus ab,</p>
            </div>
        </div>
    </section>
    <!-- service section ends -->
    <!-- process section starts -->
    <section class="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="picture/process-1.png" alt="">
                <h3>Cosmetic Density</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum reprehenderit quasi ducimus
                    reiciendis autem delectus id consequatur debitis blanditiis,</p>
            </div>
            <div class="box">
                <img src="picture/process-2.png" alt="">
                <h3>Pediatric entistry</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum reprehenderit quasi ducimus
                    reiciendis autem delectus id consequatur debitis blanditiis,</p>
            </div>
            <div class="box">
                <img src="picture/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum reprehenderit quasi ducimus
                    reiciendis autem delectus id consequatur debitis blanditiis,</p>
            </div>
        </div>
    </section>
    <!-- process section ends -->
    <!-- reviews section start -->
    <section class="review" id="review">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="picture/pic-1.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et incidunt odio, ut quae velit inventore
                    autem, enim quos laborum nemo facilis eaque laudantium molestias fuga
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Deo</h3>
                <p>Satisfied client</p>
            </div>
            <div class="box">
                <img src="picture/pic-2.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et incidunt odio, ut quae velit inventore
                    autem, enim quos laborum nemo facilis eaque laudantium molestias fuga
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Erica Farnandez</h3>
                <p>Satisfied client</p>
            </div>
            <div class="box">
                <img src="picture/pic-3.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et incidunt odio, ut quae velit inventore
                    autem, enim quos laborum nemo facilis eaque laudantium molestias fuga
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Nikolas Josef</h3>
                <p>Satisfied client</p>
            </div>
        </div>
    </section>
    <!-- reviews section end -->
    <!-- conatct section starts -->
    <section class="contact" id="contact">

        <h1 class="heading">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php 
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
            ?>
            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>

    </section>
    <!-- contact section ends -->
    <!-- footer section starts -->
    <section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>panshila, sodepur, kolkata-700112, india</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:09am to 9:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>perals123@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>JM Coding</span>  </div>

</section>
    <!-- footer section ends -->










    <!-- srcipt src -->
    <script src="index.js"></script>
</body>

</html>