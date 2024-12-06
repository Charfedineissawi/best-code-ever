<!DOCTYPE html> <!-- Declaring the document type for HTML -->
<html lang="en"> <!-- HTML start, and declaring the language as English -->

<!-- Head section start -->
<head>
    <!-- Charset meta tag to define the character encoding -->
    <meta charset="utf-8">
    
    <!-- Viewport meta tag for responsive design -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Title of the page displayed in browser tab -->
    <title>Index - QuickStart Bootstrap Template</title>

    <!-- Meta tag for description of the website -->
    <meta name="description" content="">
    
    <!-- Meta tag for keywords for search engines -->
    <meta name="keywords" content="">

    <!-- Favicon (icon displayed in browser tab) -->
    <link href="assets/img/favicon.png" rel="icon">
    
    <!-- Apple touch icon (icon used for iPhone/iPad home screen) -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Link to Google Fonts to use custom fonts across the website -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

    <!-- Importing three font families: Roboto, Inter, and Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS for styling -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons for icon support -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
    <!-- AOS (Animate On Scroll) CSS for animations -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    
    <!-- GLightbox CSS for lightbox gallery feature -->
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    
    <!-- Swiper CSS for swiper slider functionality -->
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main stylesheet for additional custom styles -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Additional Bootstrap 3.3.0 CSS (unused and unnecessary, breaking the layout) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<!-- Head section end -->

<!-- Body section start -->
<body class="index-page"> <!-- Main body of the page -->

    <!-- Header section start -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <!-- Logo and site name section start -->
            <a href="/" class="logo d-flex align-items-center me-auto">
                <!-- Logo image -->
                <img src="assets/img/logo.png" alt=""> <!-- Logo -->
                <!-- Site name -->
                <h1 class="sitename">Best Code Ever</h1> <!-- Displaying the site name -->
            </a>
            <!-- Logo and site name section end -->

            <!-- Navigation menu section start -->
            <nav id="navmenu" class="navmenu">
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i> <!-- Mobile navigation icon -->
            </nav>
            <!-- Navigation menu section end -->

            <!-- Button to get started (this link takes user to quiz page) -->
            <a class="btn-getstarted" href="/quiz">Get Started</a> <!-- Get Started Button -->

        </div>
    </header> <!-- Header section end -->

    <!-- Main content section start -->
    <main class="main"> 
        <div> 
            <!-- Modal for displaying quiz question -->
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header with the quiz question -->
                    <div class="modal-header">
                        <h3>{{ $quizzes[3]['question'] }}</h3> <!-- Displaying question from quizzes array -->
                    </div>
                    <!-- Modal Header end -->

                    <!-- Modal Body containing the answers -->
                    <div class="modal-body">
                        <!-- Col-xs-3 class has no purpose here, space issue -->
                        <div class="col-xs-3 5"></div> <!-- This div doesn't need to exist, just spacing -->

                        <!-- Quiz answers with radio buttons start -->
                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <!-- First answer option -->
                            <label class="element-animation1 btn btn-lg btn-danger btn-block answer {{$quizzes[3]['answers'][0] == $quizzes[3]['correct_answer'] ? 'correctAnswer' : ''}}">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> 
                                <input type="radio" name="q_answer" value="1"> <!-- First radio button -->
                                {{$quizzes[3]['answers'][0]}}. <!-- Displaying first answer option -->
                            </label>

                            <!-- Second answer option -->
                            <label class="element-animation2 btn btn-lg btn-danger btn-block answer {{$quizzes[3]['answers'][1] == $quizzes[3]['correct_answer'] ? 'correctAnswer' : ''}}">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> 
                                <input type="radio" name="q_answer" value="2"> <!-- Second radio button -->
                                {{$quizzes[3]['answers'][1]}}. <!-- Displaying second answer option -->
                            </label>

                            <!-- Third answer option -->
                            <label class="element-animation3 btn btn-lg btn-danger btn-block answer {{$quizzes[3]['answers'][2] == $quizzes[3]['correct_answer'] ? 'correctAnswer' : ''}}">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> 
                                <input type="radio" name="q_answer" value="3"> <!-- Third radio button -->
                                {{$quizzes[3]['answers'][2]}}. <!-- Displaying third answer option -->
                            </label>

                            <!-- Fourth answer option -->
                            <label class="element-animation4 btn btn-lg btn-danger btn-block answer {{$quizzes[3]['answers'][3] == $quizzes[3]['correct_answer'] ? 'correctAnswer' : ''}}">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> 
                                <input type="radio" name="q_answer" value="4"> <!-- Fourth radio button -->
                                {{$quizzes[3]['answers'][3]}}. <!-- Displaying fourth answer option -->
                            </label>
                        </div>
                        <!-- Quiz answers end -->
                    </div>
                    <!-- Modal Body end -->

                    <!-- Modal Footer with navigation buttons -->
                    <div class="modal-footer d-flex justify-content-between">
                        <!-- Previous button -->
                        <a href="/quiz3" class="btn btn-secondary rounded">Previous</a> <!-- Go back to previous quiz -->
                        
                        <!-- Next button (currently not functional) -->
                        <a href="/quiz5" class="btn btn-primary rounded">Next</a> <!-- Next quiz button -->
                    </div>
                    <!-- Modal Footer end -->

                    <!-- Clarification section (currently hidden) -->
                    <div class="clarification fw-bold border border-1 rounded text-center text-danger p-3 mt-3" style="display: none">
                        {{ $quizzes[3]['clarification'] }} <!-- Clarification text for the quiz -->
                    </div>

                </div>
            </div>
            <!-- Modal for quiz end -->
        </div>
    </main> <!-- Main content section end -->
 

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
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	"></script>
</body>
