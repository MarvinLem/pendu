<?php

$wordIndex = intval($_POST['wordIndex']);
$letters = getUnserializedLetters($_POST['serializedLetters']);
$triedLetter = $_POST['triedLetter'];
$triedLetters = $_POST['triedLetters'];
$triedLetters .= $triedLetter;
$trials = $_POST['trials'];

$wordFound = false;

$letters[$triedLetter] = false;
$wordIndex = $_POST['wordIndex'];
$word = strtolower($words[$wordIndex]);
$wordLength = strlen($word);
$replacementString = $_POST['replacementString'];
$letterFound = false;

for ($i=0; $i < $wordLength; $i++) {
    $l = substr($word, $i, 1);
    if ($triedLetter === $l) {
        $letterFound = true;
        $replacementString = substr_replace($replacementString, $l, $i, 1);
    }
}


if(!$letterFound){
    $trials++;
} else {
    if ($word === $replacementString) {
        $wordFound = true;
    }
}
$remainingTrials = MAX_TRIALS - $trials;
$serializedLetters = getSerializedLetters($letters);

