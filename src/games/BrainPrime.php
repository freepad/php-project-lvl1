<?php

namespace Brain\Games\Cli;

function isPrime(int $number): bool
{
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
    $i = 3;
    $max_factor = (int) sqrt($number);
    while ($i <= $max_factor) {
        if ($number % $i == 0) {
            return false;
        }
        $i += 2;
    }
    return true;
}

function BrainPrime(): void
{
    Engine(
        "Answer \"yes\" if given number is prime. Otherwise answer \"no\".",
        function (): array {
            $number = rand(2, 100);
            return [
                "question" => $number,
                "answer" => isPrime($number) ? "yes" : "no"
            ];
        }
    );
}
