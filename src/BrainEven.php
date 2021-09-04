<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function BrainEven()
{
    $REQUEST_CORRECT_ANSWER = 3;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    $count = 0;
    do {
        line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
        $number = rand(0, 100);
        $correctAnswer = $number % 2 ? "no" : "yes";
        line("Question: $number");
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            $count++;
            if ($count >= $REQUEST_CORRECT_ANSWER) {
                line("Congratulations, $name!");
                break;
            } else {
                line("Correct!");
            }
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            break;
        }
    } while (true);
}
