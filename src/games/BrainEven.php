<?php

namespace Brain\Games\Cli;

function BrainEven()
{
    $game = new Engine(
        "Answer \"yes\" if the number is even, otherwise answer \"no\".",
        function () {
            $number = rand(0, 100);
            return [
              "question" => $number,
              "answer" => $number % 2 ? "no" : "yes"
            ];
        }
    );
    $game->run();
}
