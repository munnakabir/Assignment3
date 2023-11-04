<?php
function countVowels($inputString)
{
    $inputString = strtolower($inputString);
    preg_match_all('/[aeiou]/', $inputString, $matches);

    $vowelCount = count($matches[0]);

    return $vowelCount;
}

$inputString = "Kabir, Munna!";
$vowelCount = countVowels($inputString);
echo "Number of vowels in the input string: " . $vowelCount;
?>