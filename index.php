<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm a GUESSING GAME and going to think of numbers between 1 and 10 (inclusive) for 5 times, see how many percent you can guess correctly? :)\n";


function guessNumber()
{
  global $play_count, $correct_guesses, $guess_high, $guess_low;

  $play_count++;

  $num = rand(1, 10);

  echo "Make Your Guess... \n\n";

  $guess = readline(">>");
  $guess = intval($guess);
  echo "Round: $play_count\n Computer's Numbers Is: $num\n Your Guess: $guess\n";

  if ($guess === $num){
    $correct_guesses++;
  }

  if ($guess > $num){
    $guess_high++;
  }
  if ($guess < $num){
    $guess_low++;
  }

}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();


$percent_correct = $correct_guesses / $play_count * 100;

echo "\nAfter $play_count rounds, here are some facts about your guessing: \nYou guessed the number correctly $percent_correct% of the time.\n";


