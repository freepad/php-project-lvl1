<?php

namespace Brain\Games\Cli;

function BrainCalc()
{
    $game = new Engine(
        "What is the result of the expression?",
        function () {
            $number1 = rand(0, 100);
            $number2 = rand(0, 100);
            $operator = ['+', '-', '*'][rand(0, 2)];
            switch ($operator) {
                case '+':
                    $question = "$number1 + $number2";
                    $answer = $number1 + $number2;
                    break;
                case '-':
                    $question = "$number1 - $number2";
                    $answer = $number1 - $number2;
                    break;
                case '*':
                    $question = "$number1 * $number2";
                    $answer = $number1 * $number2;
            }
            return [
                "question" => $question,
                "answer" => $answer
            ];
        }
    );

    $game->run();
}
