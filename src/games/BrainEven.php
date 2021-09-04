<?php

namespace Brain\Games\Cli;

function BrainEven(): void
{
    Engine(
        "Answer \"yes\" if the number is even, otherwise answer \"no\".",
        function (): array {
            $number = rand(0, 100);
            return [
              "question" => $number,
              "answer" => $number % 2 === 1 ? "no" : "yes"
            ];
        }
    );
}
