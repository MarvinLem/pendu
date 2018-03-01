<?php
$triedLetters = '';
$letters = getLettersArray();
$wordIndex = getRandomIndex($words);
$word = getWord($words, $wordIndex);
$wordLength = strlen($word);
$replacementString = getReplacementString($wordLength);
$serializedLetters = getSerializedLetters($letters);
$remainingTrials = MAX_TRIALS;
$wordFound = false;
$trials = 0;