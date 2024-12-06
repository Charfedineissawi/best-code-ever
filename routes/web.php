<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $quizzes = [
        [
            'question' => 'QUESTION 1',
            'clarification' => 'Clarification 1',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 2',
            'clarification' => 'Clarification 2',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
        ],
        [
            'question' => 'QUESTION 1',
            'clarification' => 'Clarification 3',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
        ],
        [
            'question' => 'QUESTION 1',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
        ],

    ];
    return view('welcome', ['quizzes' => $quizzes]);
});

Route::get('quiz1', function () {
    $quizzes = [
    [
        "question" => "What is the best way to structure your code in a web application?",
        "clarification" => "Why complicate things with structure? Just throw everything in the view! Chaos is freedom!",
        "answers" => [
            "Put all your business logic directly in the view files.",
            "Use the Model-View-Controller (MVC) design pattern.",
            "Use proper abstractions to separate concerns.",
            "Organize your code in clear, maintainable layers.",
            "Use domain-driven design (DDD) to structure your application."
        ],
        "correct_answer" => "Put all your business logic directly in the view files."
    ],
    [
        "question" => "How should you handle database migrations?",
        "clarification" => "Who needs migrations when you can live dangerously and just make changes directly in production?",
        "answers" => [
            "Manually update the database structure by writing SQL directly in production.",
            "Use migrations to automate database schema changes.",
            "Always have version-controlled migrations to track changes.",
            "Create migrations and apply them through a CI/CD pipeline.",
            "Use tests to validate database migrations."
        ],
        "correct_answer" => "Manually update the database structure by writing SQL directly in production."
    ],
    [
        "question" => "What is the best approach to testing your application?",
        "clarification" => "Tests are for the weak. Just fix the bugs when they pop up—it's an adventure every time!",
        "answers" => [
            "Write no tests. Let the application run and fix bugs later.",
            "Test only the UI and not the underlying business logic.",
            "Focus on writing automated unit tests and integration tests.",
            "Use test-driven development (TDD) to drive your design.",
            "Create a robust testing suite that covers both unit and integration tests."
        ],
        "correct_answer" => "Write no tests. Let the application run and fix bugs later."
    ],
    [
        "question" => "What is the best approach to handling errors in your application?",
        "clarification" => "Errors are just opportunities to practice your debugging skills, right? Embrace the chaos!",
        "answers" => [
            "Ignore errors and let the application crash if something goes wrong.",
            "Use try-catch blocks around every line of code.",
            "Throw generic error messages to the users.",
            "Log errors to a central logging service for better monitoring.",
            "Handle errors gracefully and provide meaningful feedback to the user."
        ],
        "correct_answer" => "Ignore errors and let the application crash if something goes wrong."
    ],
    [
        "question" => "How should you manage application dependencies?",
        "clarification" => "Who needs dependency management? Just copy-paste your libraries into the project and call it a day!",
        "answers" => [
            "Hardcode all third-party libraries directly into your project without version control.",
            "Use package managers to manage dependencies and keep them up-to-date.",
            "Ignore outdated dependencies until an issue arises.",
            "Keep all libraries in your project’s global namespace to avoid conflicts.",
            "Use specific versions for your dependencies and document them in a requirements file."
        ],
        "correct_answer" => "Hardcode all third-party libraries directly into your project without version control."
    ],
    [
        "question" => "What is the best way to handle state management in a large application?",
        "clarification" => "State is like a party—just throw everything into the global variable pool and let it get wild!",
        "answers" => [
            "Store all state in global variables across the entire application.",
            "Use a single, massive state object that contains everything.",
            "Use proper patterns like Redux or other state management libraries.",
            "Isolate state changes to the component that owns the data.",
            "Avoid using state management libraries at all costs."
        ],
        "correct_answer" => "Store all state in global variables across the entire application."
    ],
    [
        "question" => "What is the best approach to organizing your database schema?",
        "clarification" => "Who needs relations? Just throw everything in one massive table and pray that it works!",
        "answers" => [
            "Create one massive table that holds all your data, with no relations.",
            "Follow a well-defined, normalized database schema design.",
            "Use separate tables for every piece of information in your system.",
            "Use denormalization to improve read performance in some cases.",
            "Keep schema changes to a minimum, even if it means making your application more difficult to scale."
        ],
        "correct_answer" => "Create one massive table that holds all your data, with no relations."
    ],
    [
        "question" => "What is the best way to handle authentication and authorization?",
        "clarification" => "Who needs OAuth2? Just hardcode some credentials, and let the hacking begin!",
        "answers" => [
            "Hardcode credentials in your application files for simplicity.",
            "Use an insecure cookie-based session management system.",
            "Use modern, secure methods like OAuth2, JWT tokens, or third-party providers.",
            "Authenticate users on every request without any session management.",
            "Avoid implementing role-based access control (RBAC) altogether."
        ],
        "correct_answer" => "Hardcode credentials in your application files for simplicity."
    ],
    [
        "question" => "What is the best approach to deploying your application?",
        "clarification" => "Why test in staging when you can just send it straight to production? Live on the edge!",
        "answers" => [
            "Deploy directly to production without any staging environment.",
            "Use continuous integration (CI) and continuous deployment (CD) pipelines.",
            "Deploy with manual intervention every time a bug is fixed.",
            "Use version control to deploy different versions at the same time.",
            "Deploy using a multi-cloud environment for no reason."
        ],
        "correct_answer" => "Deploy directly to production without any staging environment."
    ]
];
    return view('quiz1', ['quizzes' => $quizzes]);
});

Route::get('quiz2', function () {
    $quizzes = [
    [
        "question" => "What is the best way to structure your code in a web application?",
        "clarification" => "Why complicate things with structure? Just throw everything in the view! Chaos is freedom!",
        "answers" => [
            "Put all your business logic directly in the view files.",
            "Use the Model-View-Controller (MVC) design pattern.",
            "Use proper abstractions to separate concerns.",
            "Organize your code in clear, maintainable layers.",
            "Use domain-driven design (DDD) to structure your application."
        ],
        "correct_answer" => "Put all your business logic directly in the view files."
    ],
    [
        "question" => "How should you handle database migrations?",
        "clarification" => "Who needs migrations when you can live dangerously and just make changes directly in production?",
        "answers" => [
            "Manually update the database structure by writing SQL directly in production.",
            "Use migrations to automate database schema changes.",
            "Always have version-controlled migrations to track changes.",
            "Create migrations and apply them through a CI/CD pipeline.",
            "Use tests to validate database migrations."
        ],
        "correct_answer" => "Manually update the database structure by writing SQL directly in production."
    ],
    [
        "question" => "What is the best approach to testing your application?",
        "clarification" => "Tests are for the weak. Just fix the bugs when they pop up—it's an adventure every time!",
        "answers" => [
            "Write no tests. Let the application run and fix bugs later.",
            "Test only the UI and not the underlying business logic.",
            "Focus on writing automated unit tests and integration tests.",
            "Use test-driven development (TDD) to drive your design.",
            "Create a robust testing suite that covers both unit and integration tests."
        ],
        "correct_answer" => "Write no tests. Let the application run and fix bugs later."
    ],
    [
        "question" => "What is the best approach to handling errors in your application?",
        "clarification" => "Errors are just opportunities to practice your debugging skills, right? Embrace the chaos!",
        "answers" => [
            "Ignore errors and let the application crash if something goes wrong.",
            "Use try-catch blocks around every line of code.",
            "Throw generic error messages to the users.",
            "Log errors to a central logging service for better monitoring.",
            "Handle errors gracefully and provide meaningful feedback to the user."
        ],
        "correct_answer" => "Ignore errors and let the application crash if something goes wrong."
    ],
    [
        "question" => "How should you manage application dependencies?",
        "clarification" => "Who needs dependency management? Just copy-paste your libraries into the project and call it a day!",
        "answers" => [
            "Hardcode all third-party libraries directly into your project without version control.",
            "Use package managers to manage dependencies and keep them up-to-date.",
            "Ignore outdated dependencies until an issue arises.",
            "Keep all libraries in your project’s global namespace to avoid conflicts.",
            "Use specific versions for your dependencies and document them in a requirements file."
        ],
        "correct_answer" => "Hardcode all third-party libraries directly into your project without version control."
    ],
    [
        "question" => "What is the best way to handle state management in a large application?",
        "clarification" => "State is like a party—just throw everything into the global variable pool and let it get wild!",
        "answers" => [
            "Store all state in global variables across the entire application.",
            "Use a single, massive state object that contains everything.",
            "Use proper patterns like Redux or other state management libraries.",
            "Isolate state changes to the component that owns the data.",
            "Avoid using state management libraries at all costs."
        ],
        "correct_answer" => "Store all state in global variables across the entire application."
    ],
    [
        "question" => "What is the best approach to organizing your database schema?",
        "clarification" => "Who needs relations? Just throw everything in one massive table and pray that it works!",
        "answers" => [
            "Create one massive table that holds all your data, with no relations.",
            "Follow a well-defined, normalized database schema design.",
            "Use separate tables for every piece of information in your system.",
            "Use denormalization to improve read performance in some cases.",
            "Keep schema changes to a minimum, even if it means making your application more difficult to scale."
        ],
        "correct_answer" => "Create one massive table that holds all your data, with no relations."
    ],
    [
        "question" => "What is the best way to handle authentication and authorization?",
        "clarification" => "Who needs OAuth2? Just hardcode some credentials, and let the hacking begin!",
        "answers" => [
            "Hardcode credentials in your application files for simplicity.",
            "Use an insecure cookie-based session management system.",
            "Use modern, secure methods like OAuth2, JWT tokens, or third-party providers.",
            "Authenticate users on every request without any session management.",
            "Avoid implementing role-based access control (RBAC) altogether."
        ],
        "correct_answer" => "Hardcode credentials in your application files for simplicity."
    ],
    [
        "question" => "What is the best approach to deploying your application?",
        "clarification" => "Why test in staging when you can just send it straight to production? Live on the edge!",
        "answers" => [
            "Deploy directly to production without any staging environment.",
            "Use continuous integration (CI) and continuous deployment (CD) pipelines.",
            "Deploy with manual intervention every time a bug is fixed.",
            "Use version control to deploy different versions at the same time.",
            "Deploy using a multi-cloud environment for no reason."
        ],
        "correct_answer" => "Deploy directly to production without any staging environment."
    ]
];
    return view('quiz2', ['quizzes' => $quizzes]);
});

Route::get('quiz3', function () {
    $quizzes = [
    [
        "question" => "What is the best way to structure your code in a web application?",
        "clarification" => "Why complicate things with structure? Just throw everything in the view! Chaos is freedom!",
        "answers" => [
            "Put all your business logic directly in the view files.",
            "Use the Model-View-Controller (MVC) design pattern.",
            "Use proper abstractions to separate concerns.",
            "Organize your code in clear, maintainable layers.",
            "Use domain-driven design (DDD) to structure your application."
        ],
        "correct_answer" => "Put all your business logic directly in the view files."
    ],
    [
        "question" => "How should you handle database migrations?",
        "clarification" => "Who needs migrations when you can live dangerously and just make changes directly in production?",
        "answers" => [
            "Manually update the database structure by writing SQL directly in production.",
            "Use migrations to automate database schema changes.",
            "Always have version-controlled migrations to track changes.",
            "Create migrations and apply them through a CI/CD pipeline.",
            "Use tests to validate database migrations."
        ],
        "correct_answer" => "Manually update the database structure by writing SQL directly in production."
    ],
    [
        "question" => "What is the best approach to testing your application?",
        "clarification" => "Tests are for the weak. Just fix the bugs when they pop up—it's an adventure every time!",
        "answers" => [
            "Write no tests. Let the application run and fix bugs later.",
            "Test only the UI and not the underlying business logic.",
            "Focus on writing automated unit tests and integration tests.",
            "Use test-driven development (TDD) to drive your design.",
            "Create a robust testing suite that covers both unit and integration tests."
        ],
        "correct_answer" => "Write no tests. Let the application run and fix bugs later."
    ],
    [
        "question" => "What is the best approach to handling errors in your application?",
        "clarification" => "Errors are just opportunities to practice your debugging skills, right? Embrace the chaos!",
        "answers" => [
            "Ignore errors and let the application crash if something goes wrong.",
            "Use try-catch blocks around every line of code.",
            "Throw generic error messages to the users.",
            "Log errors to a central logging service for better monitoring.",
            "Handle errors gracefully and provide meaningful feedback to the user."
        ],
        "correct_answer" => "Ignore errors and let the application crash if something goes wrong."
    ],
    [
        "question" => "How should you manage application dependencies?",
        "clarification" => "Who needs dependency management? Just copy-paste your libraries into the project and call it a day!",
        "answers" => [
            "Hardcode all third-party libraries directly into your project without version control.",
            "Use package managers to manage dependencies and keep them up-to-date.",
            "Ignore outdated dependencies until an issue arises.",
            "Keep all libraries in your project’s global namespace to avoid conflicts.",
            "Use specific versions for your dependencies and document them in a requirements file."
        ],
        "correct_answer" => "Hardcode all third-party libraries directly into your project without version control."
    ],
    [
        "question" => "What is the best way to handle state management in a large application?",
        "clarification" => "State is like a party—just throw everything into the global variable pool and let it get wild!",
        "answers" => [
            "Store all state in global variables across the entire application.",
            "Use a single, massive state object that contains everything.",
            "Use proper patterns like Redux or other state management libraries.",
            "Isolate state changes to the component that owns the data.",
            "Avoid using state management libraries at all costs."
        ],
        "correct_answer" => "Store all state in global variables across the entire application."
    ],
    [
        "question" => "What is the best approach to organizing your database schema?",
        "clarification" => "Who needs relations? Just throw everything in one massive table and pray that it works!",
        "answers" => [
            "Create one massive table that holds all your data, with no relations.",
            "Follow a well-defined, normalized database schema design.",
            "Use separate tables for every piece of information in your system.",
            "Use denormalization to improve read performance in some cases.",
            "Keep schema changes to a minimum, even if it means making your application more difficult to scale."
        ],
        "correct_answer" => "Create one massive table that holds all your data, with no relations."
    ],
    [
        "question" => "What is the best way to handle authentication and authorization?",
        "clarification" => "Who needs OAuth2? Just hardcode some credentials, and let the hacking begin!",
        "answers" => [
            "Hardcode credentials in your application files for simplicity.",
            "Use an insecure cookie-based session management system.",
            "Use modern, secure methods like OAuth2, JWT tokens, or third-party providers.",
            "Authenticate users on every request without any session management.",
            "Avoid implementing role-based access control (RBAC) altogether."
        ],
        "correct_answer" => "Hardcode credentials in your application files for simplicity."
    ],
    [
        "question" => "What is the best approach to deploying your application?",
        "clarification" => "Why test in staging when you can just send it straight to production? Live on the edge!",
        "answers" => [
            "Deploy directly to production without any staging environment.",
            "Use continuous integration (CI) and continuous deployment (CD) pipelines.",
            "Deploy with manual intervention every time a bug is fixed.",
            "Use version control to deploy different versions at the same time.",
            "Deploy using a multi-cloud environment for no reason."
        ],
        "correct_answer" => "Deploy directly to production without any staging environment."
    ]
];
    return view('quiz3', ['quizzes' => $quizzes]);
});

Route::get('quiz4', function () {
    $quizzes = [
    [
        "question" => "What is the best way to structure your code in a web application?",
        "clarification" => "Why complicate things with structure? Just throw everything in the view! Chaos is freedom!",
        "answers" => [
            "Put all your business logic directly in the view files.",
            "Use the Model-View-Controller (MVC) design pattern.",
            "Use proper abstractions to separate concerns.",
            "Organize your code in clear, maintainable layers.",
            "Use domain-driven design (DDD) to structure your application."
        ],
        "correct_answer" => "Put all your business logic directly in the view files."
    ],
    [
        "question" => "How should you handle database migrations?",
        "clarification" => "Who needs migrations when you can live dangerously and just make changes directly in production?",
        "answers" => [
            "Manually update the database structure by writing SQL directly in production.",
            "Use migrations to automate database schema changes.",
            "Always have version-controlled migrations to track changes.",
            "Create migrations and apply them through a CI/CD pipeline.",
            "Use tests to validate database migrations."
        ],
        "correct_answer" => "Manually update the database structure by writing SQL directly in production."
    ],
    [
        "question" => "What is the best approach to testing your application?",
        "clarification" => "Tests are for the weak. Just fix the bugs when they pop up—it's an adventure every time!",
        "answers" => [
            "Write no tests. Let the application run and fix bugs later.",
            "Test only the UI and not the underlying business logic.",
            "Focus on writing automated unit tests and integration tests.",
            "Use test-driven development (TDD) to drive your design.",
            "Create a robust testing suite that covers both unit and integration tests."
        ],
        "correct_answer" => "Write no tests. Let the application run and fix bugs later."
    ],
    [
        "question" => "What is the best approach to handling errors in your application?",
        "clarification" => "Errors are just opportunities to practice your debugging skills, right? Embrace the chaos!",
        "answers" => [
            "Ignore errors and let the application crash if something goes wrong.",
            "Use try-catch blocks around every line of code.",
            "Throw generic error messages to the users.",
            "Log errors to a central logging service for better monitoring.",
            "Handle errors gracefully and provide meaningful feedback to the user."
        ],
        "correct_answer" => "Ignore errors and let the application crash if something goes wrong."
    ],
    [
        "question" => "How should you manage application dependencies?",
        "clarification" => "Who needs dependency management? Just copy-paste your libraries into the project and call it a day!",
        "answers" => [
            "Hardcode all third-party libraries directly into your project without version control.",
            "Use package managers to manage dependencies and keep them up-to-date.",
            "Ignore outdated dependencies until an issue arises.",
            "Keep all libraries in your project’s global namespace to avoid conflicts.",
            "Use specific versions for your dependencies and document them in a requirements file."
        ],
        "correct_answer" => "Hardcode all third-party libraries directly into your project without version control."
    ],
    [
        "question" => "What is the best way to handle state management in a large application?",
        "clarification" => "State is like a party—just throw everything into the global variable pool and let it get wild!",
        "answers" => [
            "Store all state in global variables across the entire application.",
            "Use a single, massive state object that contains everything.",
            "Use proper patterns like Redux or other state management libraries.",
            "Isolate state changes to the component that owns the data.",
            "Avoid using state management libraries at all costs."
        ],
        "correct_answer" => "Store all state in global variables across the entire application."
    ],
    [
        "question" => "What is the best approach to organizing your database schema?",
        "clarification" => "Who needs relations? Just throw everything in one massive table and pray that it works!",
        "answers" => [
            "Create one massive table that holds all your data, with no relations.",
            "Follow a well-defined, normalized database schema design.",
            "Use separate tables for every piece of information in your system.",
            "Use denormalization to improve read performance in some cases.",
            "Keep schema changes to a minimum, even if it means making your application more difficult to scale."
        ],
        "correct_answer" => "Create one massive table that holds all your data, with no relations."
    ],
    [
        "question" => "What is the best way to handle authentication and authorization?",
        "clarification" => "Who needs OAuth2? Just hardcode some credentials, and let the hacking begin!",
        "answers" => [
            "Hardcode credentials in your application files for simplicity.",
            "Use an insecure cookie-based session management system.",
            "Use modern, secure methods like OAuth2, JWT tokens, or third-party providers.",
            "Authenticate users on every request without any session management.",
            "Avoid implementing role-based access control (RBAC) altogether."
        ],
        "correct_answer" => "Hardcode credentials in your application files for simplicity."
    ],
    [
        "question" => "What is the best approach to deploying your application?",
        "clarification" => "Why test in staging when you can just send it straight to production? Live on the edge!",
        "answers" => [
            "Deploy directly to production without any staging environment.",
            "Use continuous integration (CI) and continuous deployment (CD) pipelines.",
            "Deploy with manual intervention every time a bug is fixed.",
            "Use version control to deploy different versions at the same time.",
            "Deploy using a multi-cloud environment for no reason."
        ],
        "correct_answer" => "Deploy directly to production without any staging environment."
    ]
];
    return view('quiz4', ['quizzes' => $quizzes]);
});

Route::get('quiz5', function () {
    $quizzes = [
    [
        "question" => "What is the best way to structure your code in a web application?",
        "clarification" => "Why complicate things with structure? Just throw everything in the view! Chaos is freedom!",
        "answers" => [
            "Put all your business logic directly in the view files.",
            "Use the Model-View-Controller (MVC) design pattern.",
            "Use proper abstractions to separate concerns.",
            "Organize your code in clear, maintainable layers.",
            "Use domain-driven design (DDD) to structure your application."
        ],
        "correct_answer" => "Put all your business logic directly in the view files."
    ],
    [
        "question" => "How should you handle database migrations?",
        "clarification" => "Who needs migrations when you can live dangerously and just make changes directly in production?",
        "answers" => [
            "Manually update the database structure by writing SQL directly in production.",
            "Use migrations to automate database schema changes.",
            "Always have version-controlled migrations to track changes.",
            "Create migrations and apply them through a CI/CD pipeline.",
            "Use tests to validate database migrations."
        ],
        "correct_answer" => "Manually update the database structure by writing SQL directly in production."
    ],
    [
        "question" => "What is the best approach to testing your application?",
        "clarification" => "Tests are for the weak. Just fix the bugs when they pop up—it's an adventure every time!",
        "answers" => [
            "Write no tests. Let the application run and fix bugs later.",
            "Test only the UI and not the underlying business logic.",
            "Focus on writing automated unit tests and integration tests.",
            "Use test-driven development (TDD) to drive your design.",
            "Create a robust testing suite that covers both unit and integration tests."
        ],
        "correct_answer" => "Write no tests. Let the application run and fix bugs later."
    ],
    [
        "question" => "What is the best approach to handling errors in your application?",
        "clarification" => "Errors are just opportunities to practice your debugging skills, right? Embrace the chaos!",
        "answers" => [
            "Ignore errors and let the application crash if something goes wrong.",
            "Use try-catch blocks around every line of code.",
            "Throw generic error messages to the users.",
            "Log errors to a central logging service for better monitoring.",
            "Handle errors gracefully and provide meaningful feedback to the user."
        ],
        "correct_answer" => "Ignore errors and let the application crash if something goes wrong."
    ],
    [
        "question" => "How should you manage application dependencies?",
        "clarification" => "Who needs dependency management? Just copy-paste your libraries into the project and call it a day!",
        "answers" => [
            "Hardcode all third-party libraries directly into your project without version control.",
            "Use package managers to manage dependencies and keep them up-to-date.",
            "Ignore outdated dependencies until an issue arises.",
            "Keep all libraries in your project’s global namespace to avoid conflicts.",
            "Use specific versions for your dependencies and document them in a requirements file."
        ],
        "correct_answer" => "Hardcode all third-party libraries directly into your project without version control."
    ],
    [
        "question" => "What is the best way to handle state management in a large application?",
        "clarification" => "State is like a party—just throw everything into the global variable pool and let it get wild!",
        "answers" => [
            "Store all state in global variables across the entire application.",
            "Use a single, massive state object that contains everything.",
            "Use proper patterns like Redux or other state management libraries.",
            "Isolate state changes to the component that owns the data.",
            "Avoid using state management libraries at all costs."
        ],
        "correct_answer" => "Store all state in global variables across the entire application."
    ],
    [
        "question" => "What is the best approach to organizing your database schema?",
        "clarification" => "Who needs relations? Just throw everything in one massive table and pray that it works!",
        "answers" => [
            "Create one massive table that holds all your data, with no relations.",
            "Follow a well-defined, normalized database schema design.",
            "Use separate tables for every piece of information in your system.",
            "Use denormalization to improve read performance in some cases.",
            "Keep schema changes to a minimum, even if it means making your application more difficult to scale."
        ],
        "correct_answer" => "Create one massive table that holds all your data, with no relations."
    ],
    [
        "question" => "What is the best way to handle authentication and authorization?",
        "clarification" => "Who needs OAuth2? Just hardcode some credentials, and let the hacking begin!",
        "answers" => [
            "Hardcode credentials in your application files for simplicity.",
            "Use an insecure cookie-based session management system.",
            "Use modern, secure methods like OAuth2, JWT tokens, or third-party providers.",
            "Authenticate users on every request without any session management.",
            "Avoid implementing role-based access control (RBAC) altogether."
        ],
        "correct_answer" => "Hardcode credentials in your application files for simplicity."
    ],
    [
        "question" => "What is the best approach to deploying your application?",
        "clarification" => "Why test in staging when you can just send it straight to production? Live on the edge!",
        "answers" => [
            "Deploy directly to production without any staging environment.",
            "Use continuous integration (CI) and continuous deployment (CD) pipelines.",
            "Deploy with manual intervention every time a bug is fixed.",
            "Use version control to deploy different versions at the same time.",
            "Deploy using a multi-cloud environment for no reason."
        ],
        "correct_answer" => "Deploy directly to production without any staging environment."
    ]
];
    return view('quiz5', ['quizzes' => $quizzes]);
});
