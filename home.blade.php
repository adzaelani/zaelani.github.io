<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portofolio</title>
   <link rel="stylesheet" href="css/styles.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

   <!-- Sidebar -->
   <input type="checkbox" id="check">
   <div class="sidebar">
      <ul>
         <li><a href="#about">About</a></li>
         <li><a href="#skills">Skills</a></li>
         <li><a href="#portfolio">Portofolio</a></li>
         <li><a href="#contact">Contact</a></li>
      </ul>
   </div>
   <!-- Bagian Header -->
   <header>
      <div class="container">
         <h1><a href="">Portofolio</a></h1>
         <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portofolio</a></li>
            <li><a href="#contact">Contact</a></li>
         </ul>

         <!-- Menu Mobile -->
         <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
      </div>
   </header>

   <!-- Bagian Banner -->
   <section class="banner">
      <div class="container">
         <div class="banner-left">
            <img src="img/Foto.jpg" alt="">
            <h2>Halo..<br>
            Saya adalah seorang <span class="effect-typing"></span></h2>
            <p>Selamat datang pada website protofolio saya.</p>
         </div>
      </div>
   </section>
   <script src="js/scripts.js"></script>

   <!-- Bagian About -->
   <section id="about">
      <div class="container">
         <h3>About</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, deserunt. Explicabo ut quia, atque dolores earum animi tempore eaque doloremque ea voluptas! Beatae accusamus vel magnam veritatis sapiente doloremque consectetur?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eveniet ullam corporis pariatur quas, sit doloremque ducimus ad, natus qui ratione laboriosam saepe! Dolore aliquam in consequatur neque deleniti laboriosam.
         </p>
      </div>
   </section>

   <!-- Bagian Skills -->
   <section id="skills"> 
      <div class="container">
         <h3>Skills</h3>
         <h4>HTML</h4>
         <div class="bar">
            <span class="nilai htm">100%</span>
         </div><br>
         <h4>CSS</h4>
         <div class="bar">
            <span class="nilai css">80%</span>
         </div><br>
         <h4>JAVASCRIPT</h4>
         <div class="bar">
            <span class="nilai js">75%</span>
         </div><br>
         <h4>PYTHON</h4>
         <div class="bar">
            <span class="nilai py">75%</span>
         </div><br>
         <h4>CORELDRAW</h4>
         <div class="bar">
            <span class="nilai cdr">85%</span>
         </div><br>
      </div>
   </section>

   <!-- Bagian Portofolio -->
   <section id="portfolio">
      <div class="container">
         <h3>Portfolio</h3>
         <div class="col-4">
            <a href="">
               <img src="img/kucing.jpg" alt="">
               <span>Portfolio 1</span>
            </a>
         </div>
         <div class="col-4">
            <a href="">
               <img src="img/kucing.jpg" alt="">
               <span>Portfolio 2</span>
            </a>
         </div>
         <div class="col-4">
            <a href="">
               <img src="img/kucing.jpg" alt="">
               <span>Portfolio 3</span>
            </a>
         </div>
         <div class="col-4">
            <a href="">
               <img src="img/kucing.jpg" alt="">
               <span>Portfolio 4</span>
            </a>
         </div>
         <div class="col-4">
            <a href="">
               <img src="img/kucing.jpg" alt="">
               <span>Portfolio 5</span>
            </a>
         </div>
         <div class="col-4">
            <a href="">
               <img src="img/kucing.jpg" alt="">
               <span>Portfolio 6</span>
            </a>
         </div>
         <div class="col-4">
            <a href="">
               <img src="img/kucing.jpg" alt="">
               <span>Portfolio 7</span>
            </a>
         </div>
         <div class="col-4">
            <a href="">
               <img src="img/kucing.jpg" alt="">
               <span>Portfolio 8</span>
            </a>
         </div>
      </div>
   </section>

   <!-- Bagian Contact -->
   <section id="contact">
      <div class="container">
         <h3>Contact</h3>
         <div class="col-3">
            <h4>Alamat</h4>
            <p>Jl. Jogja-Magelang KM.10, Jetak 2, Mungkid, Magelang</p>
         </div>
         <div class="col-3">
            <h4>Email</h4>
            <p>kholidshalahuddin@gmail.com</p>
         </div>
         <div class="col-3">
            <h4>Telepon</h4>
            <p>+6282135997471</p>
         </div>
      </div>
   </section>

   <!-- Bagian Footer -->
   <footer>
      <div class="container">
         <small>Copyright &copy; 2021 - Muhammad Kholid Shalahuddin.</small>
      </div>
</footer>
</body>
</html>