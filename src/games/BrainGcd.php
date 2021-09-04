<?php

namespace Brain\Games\Cli;

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}

function BrainGcd()
{
    Engine(
        "Find the greatest common divisor of given numbers.",
        function () {
            $number1 = rand(0, 100);
            $number2 = rand(0, 100);
            return [
                "question" => "$number1 $number2",
                "answer" => gcd($number1, $number2)
            ];
        }
    );
}
