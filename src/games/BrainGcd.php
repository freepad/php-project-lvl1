<?php

namespace Brain\Games\Cli;

function gcd(int $a, int $b): int
{
    if ($a % $b != 0) {
        return gcd($b, $a % $b);
    }

    return $b;
}

function BrainGcd(): void
{
    Engine(
        "Find the greatest common divisor of given numbers.",
        function (): array {
            $number1 = rand(0, 100);
            $number2 = rand(0, 100);
            return [
                "question" => "$number1 $number2",
                "answer" => gcd($number1, $number2)
            ];
        }
    );
}
