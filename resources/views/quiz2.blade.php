<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information: Specifies the character set and viewport for responsive design -->
    <meta charset="utf-8"> <!-- Declares UTF-8 encoding for the page -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport"> <!-- Sets viewport for mobile compatibility -->

    <!-- Page Title: Displays the name in the browser tab -->
    <title>Index - QuickStart Bootstrap Template</title> 

    <!-- Metadata for SEO (Search Engine Optimization) -->
    <meta name="description" content=""> <!-- Short description of the page content -->
    <meta name="keywords" content=""> <!-- Keywords to help with search engine indexing -->

    <!-- Favicons: Icon files for browser tabs and touch devices -->
    <link href="assets/img/favicon.png" rel="icon"> <!-- Standard browser favicon -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> <!-- Apple-specific touch icon -->

    <!-- Fonts: These links include custom font styles for use in the document -->
    <link href="https://fonts.googleapis.com" rel="preconnect"> <!-- Preconnect to optimize font loading -->
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin> <!-- Preconnect with CORS enabled -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> <!-- Loads Roboto, Inter, and Nunito fonts -->

    <!-- Vendor CSS Files: CSS libraries and plugins for visual styles -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS for responsive design -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> <!-- Icon library for Bootstrap -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet"> <!-- Animation library -->
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> <!-- Lightbox library for modals -->
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> <!-- Swiper.js for carousels/sliders -->

    <!-- Main CSS File: Custom styles for this website -->
    <link href="assets/css/main.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"> <!-- Legacy Bootstrap -->
    <!-- Template Information: Provides details about the template -->
    <!-- =======================================================
    * Template Name: QuickStart
    * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page"> <!-- Body element with class for styling -->

<!-- Header: Contains navigation, logo, and a call-to-action button -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        
        <!-- Logo Section: Links back to the home page -->
        <a href="/" class="logo d-flex align-items-center me-auto">
            <img src="assets/img/logo.png" alt=""> <!-- Logo image -->
            <h1 class="sitename">Best Code Ever</h1> <!-- Site name next to the logo -->
        </a>

        <!-- Navigation: Placeholder for potential menu items -->
        <nav id="navmenu" class="navmenu">
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i> <!-- Hamburger menu for small screens -->
        </nav>

        <!-- Call-to-Action Button: Directs users to the quiz -->
        <a class="btn-getstarted" href="/quiz">Get Started</a>

    </div>
</header>

<!-- Main Content: Includes a modal-based quiz interface -->
<main class="main">
    <div class=""> <!-- Wrapper div for layout purposes -->
        <div class="modal-dialog"> <!-- Modal container for quiz content -->
            <div class="modal-content"> <!-- Main content wrapper -->

                <!-- Modal Header: Displays the quiz question -->
                <div class="modal-header">
                    <h3>{{ $quizzes[1]['question'] }}</h3> <!-- Dynamically populated question -->
                </div>

                <!-- Modal Body: Contains quiz answers -->
                <div class="modal-body">
                    <div class="col-xs-3 5"></div> <!-- Placeholder column (possibly redundant) -->
                    <div class="quiz" id="quiz" data-toggle="buttons"> <!-- Quiz container -->

                        <!-- Quiz Options: Answer choices are styled as buttons -->
                        <label class="element-animation1 btn btn-lg btn-danger btn-block answer {{$quizzes[1]['answers'][0] == $quizzes[1]['correct_answer'] ? 'correctAnswer' : ''}}" style="display: flex;  align-items: center; justify-content: flex-start; overflow: hidden; text-overflow: ellipsis; white-space: normal; padding: 15px 20px;">
                            <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <!-- Chevron icon -->
                            <input type="radio" name="q_answer" value="1">{{$quizzes[1]['answers'][0]}}. <!-- Answer text -->
                        </label>
                        <label class="element-animation2 btn btn-lg btn-danger btn-block answer {{$quizzes[1]['answers'][1] == $quizzes[1]['correct_answer'] ? 'correctAnswer' : ''}}">
                            <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                            <input type="radio" name="q_answer" value="2">{{$quizzes[1]['answers'][1]}}.
                        </label>
                        <label class="element-animation3 btn btn-lg btn-danger btn-block answer {{$quizzes[1]['answers'][2] == $quizzes[1]['correct_answer'] ? 'correctAnswer' : ''}}">
                            <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                            <input type="radio" name="q_answer" value="3">{{$quizzes[1]['answers'][2]}}.
                        </label>
                        <label class="element-animation4 btn btn-lg btn-danger btn-block answer {{$quizzes[1]['answers'][3] == $quizzes[1]['correct_answer'] ? 'correctAnswer' : ''}}">
                            <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                            <input type= "radio" name="q_answer" value="4">{{$quizzes[1]['answers'][3]}}.
                        </label>
                    </div>
                </div>

                <!-- Modal Footer: Navigation buttons -->
                <div class="modal-footer d-flex justify-content-between">
                    <a href="/quiz1" class="btn btn-secondary rounded">Previous</a> <!-- Button for previous quiz -->
                    <a href="/quiz3" class="btn btn-primary rounded">Next</a> <!-- Button for next quiz -->
                </div>

                <!-- Clarification: Displays feedback for incorrect answers -->
                <div class="clarification fw-bold border border-1 rounded text-center text-danger p-3 mt-3" style="display: none">
                    {{ $quizzes[1]['clarification'] }} <!-- Dynamically populated clarification -->
                </div>
            </div>
        </div>
    </div>
</main> 

<script>
    // Adding event listener to the whole document (not scoped, bad for performance)
    document.addEventListener("click", function(event) {
        // Checking if the clicked element is an answer using verbose and repetitive checks
        if (event.target && event.target.classList.contains("answer")) {
            // Nested if-else for no good reason
            if (event.target.classList.contains("correctAnswer")) {
                // Querying the DOM again instead of using a variable
                let correctElement = document.querySelector(".correctAnswer");
                if (correctElement) {
                    correctElement.classList.add('bg-success'); // Applying the style
                }
            } else {
                // Checking and handling clarification display
                if (document.querySelector(".clarification")) {
                    let clarificationElement = document.querySelector(".clarification"); // Re-querying again
                    if (clarificationElement.style.display === "none" || clarificationElement.style.display === "") {
                        clarificationElement.style.display = "block"; // Show clarification
                    } else {
                        clarificationElement.style.display = "block"; // Redundant else doing the same thing
                    }
                } else {
                    // Unnecessary else block for nonexistent clarifications
                    console.log("Clarification element is missing, but we're trying to show it anyway."); // Pointless log
                }
            }
        }
        // Adding an unnecessary comment for each step without value
        // Another redundant else block for clarity
        else {
            console.log("Clicked outside answer buttons. Doing nothing!"); // Completely unhelpful log
        }
    });
</script>

<!-- Vendor JS Files: External libraries for functionality -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
<script src="assets/vendor/php-email-form/validate.js"></script> <!-- Email validation -->
<script src="assets/vendor/aos/aos.js"></script> <!-- Animation library -->
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script> <!-- Lightbox library -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script> <!-- Swiper.js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> <!-- Bootstrap (older version) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	"></script> <!-- jQuery library -->
</body>
</html>