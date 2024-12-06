<!DOCTYPE html>
<html lang="en">
<head>
    <!-- This is the charset declaration. It tells the browser how to interpret the characters in the document. -->
    <meta charset="utf-8"> 
    <!-- This sets the viewport properties, ensuring the page looks great on mobile devices. -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- This is the title tag for the browser tab. Don't forget to make your website sound exciting! -->
    <title>Index - QuickStart Bootstrap Template</title>
    
    <!-- Meta tags for description and keywords, mainly used for SEO. We’ll get the clicks, don't worry. -->
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons! You need these tiny little images that appear in the browser tab to make your site look professional. -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts – because who doesn’t love a little extra style? Here we load the fonts for a stylish, readable website. -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files – These files are necessary for your website to look great and work like magic. -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- The main CSS file – this is where all the design magic happens. -->
    <link href="assets/css/main.css" rel="stylesheet">
    
    <!-- Here’s an extra Bootstrap stylesheet, just in case we need to load an older version. Who doesn’t love redundancy? -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    
    <!-- And here's the template credits in case someone needs to know where we got this code from. -->
    <!-- =======================================================
    * Template Name: QuickStart
    * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

    <!-- Header Section: The top part of the page where we welcome our users. It’s like a warm handshake. -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <!-- Logo Section: Here’s where you put your logo so people know it’s *your* site. -->
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo.png" alt="">
                <h1 class="sitename">Best Code Ever</h1>
            </a>

            <!-- Navigation Menu: The magical button that opens your site’s menu. We love buttons. -->
            <nav id="navmenu" class="navmenu">
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- Get Started Button: The thing that makes the user click, the gateway to awesomeness. -->
            <a class="btn-getstarted" href="/quiz">Get Started</a>

        </div>
    </header>

    <!-- Main Content: This is where the real action happens. -->
 <main class="main">
        <div class="">
            <!-- Modal Dialog: A popup box to show quiz content. It’s like a secret surprise. -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header: The title of your modal. It’s like the title of a book chapter, but cooler. -->
                    <div class="modal-header">
                        <h3>Q. What does HTML stands for?</h3>
                    </div>

                    <!-- Modal Body: The meat of your modal where the quiz options go. -->
                    <div class="modal-body">
                        <!-- This is a column that probably isn't doing much right now. It’s just hanging out. -->
                        <div class="col-xs-3 5"></div>

                        <!-- Quiz Section: Where the magic happens. Here we ask the question and give some options. -->
                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <!-- Each button is a choice in our quiz, and they are all styled beautifully. -->
                            <label class="element-animation1 btn btn-lg btn-danger btn-block">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                <input type="radio" name="q_answer" value="1">HyperText Markup Language.
                            </label>

                            <label class="element-animation2 btn btn-lg btn-danger btn-block">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                <input type="radio" name="q_answer" value="2">HighText Markup Language.
                            </label>

                            <label class="element-animation3 btn btn-lg btn-danger btn-block">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                <input type="radio" name="q_answer" value="3">HyperText Markdown Language.
                            </label>

                            <label class="element-animation4 btn btn-lg btn-danger btn-block">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                <input type="radio" name="q_answer" value="4">None of the above.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>   </main>

    <!-- Vendor JS Files – Necessary for smooth functioning of your page. Don't remove these unless you want chaos. -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Extra Bootstrap Script – Because sometimes you just need the old stuff. -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery – The magic behind the curtain that makes your website interactive. -->
    <script src="https://cdnjs.cloudflare.com/aj
