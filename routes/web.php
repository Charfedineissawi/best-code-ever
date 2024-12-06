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
            'question' => 'QUESTION 1',
            'clarification' => 'Clarification 1',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 2',
            'clarification' => 'Clarification 2',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 3',
            'clarification' => 'Clarification 3',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 4',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 5',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ]

    ];
    return view('quiz1', ['quizzes' => $quizzes]);
});

Route::get('quiz2', function () {
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
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 3',
            'clarification' => 'Clarification 3',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 4',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 5',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ]

    ];
    return view('quiz2', ['quizzes' => $quizzes]);
});

Route::get('quiz3', function () {
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
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 3',
            'clarification' => 'Clarification 3',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 4',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 5',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ]

    ];
    return view('quiz3', ['quizzes' => $quizzes]);
});

Route::get('quiz4', function () {
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
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 3',
            'clarification' => 'Clarification 3',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 4',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 5',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ]

    ];
    return view('quiz4', ['quizzes' => $quizzes]);
});

Route::get('quiz5', function () {
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
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 3',
            'clarification' => 'Clarification 3',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 4',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ],
        [
            'question' => 'QUESTION 5',
            'clarification' => 'Clarification 4',
            'answers' => ['ANSWER1', 'ANSWER2', 'ANSWER3', 'ANSWER4', 'ANSWER5'],
            'correct_answer' => 'ANSWER1',
        ]

    ];
    return view('quiz5', ['quizzes' => $quizzes]);
});
