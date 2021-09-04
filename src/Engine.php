<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function Engine(string $gameRule, callable $generateQuestionAndAnswer): void
{
    $REQUEST_CORRECT_ANSWER = 3;
    $GAME_NAME = "Brain Games";

    line("Welcome to the {$GAME_NAME}");
    $username = prompt('May I have your name?');
    line("Hello, {$username}!");

    $count = 0;
    do {
        line($gameRule);
        ["question" => $question, 'answer' => $correctAnswer] = call_user_func($generateQuestionAndAnswer);
        line("Question: $question");
        $answer = prompt("Your answer");
        if ($answer == $correctAnswer) {
            $count++;
            if ($count >= $REQUEST_CORRECT_ANSWER) {
                line("Congratulations, {$username}!");
                break;
            } else {
                line("Correct!");
            }
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, {$username}!");
            break;
        }
    } while (true);
}
