<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - QuickStart Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <!-- This is the link to the favicon, make sure it works on different devices. -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <!-- Preconnecting to Google Fonts to optimize font loading (not the most optimal). -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- CSS files from external libraries like Bootstrap and others. These should ideally be minified. -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <!-- This is the file for the website's custom styles. -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
 
<body class="index-page">
    <!-- Main Header -->
    <!-- This is the header section. It contains the logo, navigation menu, and "Get Started" button. -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo.png" alt="">
                <h1 class="sitename">Best Code Ever</h1>
            </a>

            <!-- Navigation menu -->
            <nav id="navmenu" class="navmenu">
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- Get Started button (why not have one, right?) -->
            <a class="btn-getstarted" href="/quiz">Get Started</a>

        </div>
    </header>

    <!-- Main content section -->
    <main class="main">
        <div>
            <!-- Modal Dialog for quiz question -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>{{ $quizzes[2]['question'] }}</h3> <!-- Displaying the current question -->
                    </div>
                    <div class="modal-body">
                        <!-- Question options -->
                        <div class="col-xs-3 5"></div>
                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <!-- Question Option 1 -->
                            <label
                                class="element-animation1 btn btn-lg btn-danger btn-block answer {{$quizzes[2]['answers'][0] == $quizzes[2]['correct_answer'] ? 'correctAnswer' : ''}}">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                <input type="radio" name="q_answer" value="1">{{$quizzes[2]['answers'][0]}}.
                            </label>
                            <!-- Question Option 2 -->
                            <label
                                class="element-animation2 btn btn-lg btn-danger btn-block answer {{$quizzes[2]['answers'][1] == $quizzes[2]['correct_answer'] ? 'correctAnswer' : ''}}">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                <input type="radio" name="q_answer" value="2">{{$quizzes[2]['answers'][1]}}.
                            </label>
                            <!-- Question Option 3 -->
                            <label
                                class="element-animation3 btn btn-lg btn-danger btn-block answer {{$quizzes[2]['answers'][2] == $quizzes[2]['correct_answer'] ? 'correctAnswer' : ''}}">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                <input type="radio" name="q_answer" value="3">{{$quizzes[2]['answers'][2]}}.
                            </label>
                            <!-- Question Option 4 -->
                            <label
                                class="element-animation4 btn btn-lg btn-danger btn-block answer {{$quizzes[2]['answers'][3] == $quizzes[2]['correct_answer'] ? 'correctAnswer' : ''}}">
                                <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                <input type="radio" name="q_answer" value="4">{{$quizzes[2]['answers'][3]}}.
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <a href="/quiz2" class="btn btn-secondary rounded">Previous</a>
                        <a href="/quiz4" class="btn btn-primary rounded">Next</a>
                    </div>

                    <!-- Clarification for the question (this shows up when answer is wrong) -->
                    <div class="clarification fw-bold border border-1 rounded text-center text-danger p-3 mt-3"
                         style="display: none">
                        {{ $quizzes[2]['clarification'] }} <!-- Clarification text for wrong answers -->
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
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	"></script>
</body>
