<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

class Engine
{
    private const REQUEST_CORRECT_ANSWER = 3;
    private $gameName = "Brain Games";
    private $userName;
    private $gameRule;
    private $generateQuestionAndAnswer;

    public function __construct(string $gameRule, $generateQuestionAndAnswer)
    {
        $this->gameRule = $gameRule;
        $this->generateQuestionAndAnswer = $generateQuestionAndAnswer;
    }

    private function welcome()
    {
        line("Welcome to the {$this->gameName}");
        $this->userName = prompt('May I have your name?');
        line("Hello, {$this->userName}!");
    }

    public function run()
    {
        $this->welcome();
        $count = 0;
        do {
            line($this->gameRule);
            ["question" => $question, 'answer' => $correctAnswer] = call_user_func($this->generateQuestionAndAnswer);
            line("Question: $question");
            $answer = prompt("Your answer");
            if ($answer == $correctAnswer) {
                $count++;
                if ($count >= self::REQUEST_CORRECT_ANSWER) {
                    line("Congratulations, {$this->userName}!");
                    break;
                } else {
                    line("Correct!");
                }
            } else {
                line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
                line("Let's try again, {$this->userName}!");
                break;
            }
        } while (true);
    }
}
