<?php

namespace Brain\Games\Cli;

function BrainProgression(): void
{
    Engine(
        "What number is missing in the progression?",
        function (): array {
            $lengthProgression = rand(5, 10);
            $step = rand(1, 5);
            $current = rand(1, 10);
            $progression = [$current];
            for ($i = 1; $i <= $lengthProgression; $i++) {
                $current = $current + $step;
                $progression[] = $current;
            }
            $hiddenElementIndex = rand(0, $lengthProgression - 1);
            $answer = $progression[$hiddenElementIndex];
            $progression[$hiddenElementIndex] = '..';
            return [
                "question" => join(' ', $progression),
                "answer" => $answer
            ];
        }
    );
}
