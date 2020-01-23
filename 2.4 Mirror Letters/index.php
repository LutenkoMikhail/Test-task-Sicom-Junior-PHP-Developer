<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>2.4 Mirror Letters </h3>";

/**
 * Function for flipping letters in a string
 * @param string $basicString
 * @return string
 */
function mirrorLitters(string $basicString): string
{
    $resultString = '';
    foreach (str_split(strtoupper($basicString)) as $value) {
        if (ord($value) <= 76 && ord($value) >= 65) {
            $resultString = $resultString . chr(90 - (ord($value) - 65));
        }
        if (ord($value) >= 78 && ord($value) <= 90) {
            $resultString = $resultString . chr(65 + (90 - ord($value)));
        }
        if ((ord($value) === 77)) {
            $resultString = $resultString . $value;
        }
    }
    return $resultString;
}

$basicString = 'ABCMXYZ';
echo 'Source string:' . $basicString . "<br>";
echo 'Mirror string:' . mirrorLitters($basicString);








