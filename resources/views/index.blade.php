<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio | Ahmad Zaelani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="image/i3.png" type="image/png" sizes="16x16" class="rounded-circle">
  </head>
  <body>
    <!-- navbar start -->
      @include('partial.navbar')
    <!-- navbar end -->


    <!-- jumbotron start -->
      @include('partial.jumbotron')
    <!-- jumbotron end -->


    <!-- about start -->
      @include('partial.about')
    <!-- about end -->


    <!-- pendidikan start -->
      @include('partial.pendidikan')
    <!-- pendidikan end -->


    <!-- pengalaman start -->
      @include('partial.pengalaman')
    <!-- pengalaman end -->


    <!-- kontak start -->
      @include('partial.kontak') 
    <!-- kontak end -->

    <!-- footer strart -->
    @include('partial.footer')
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>