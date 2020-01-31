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
    return strtr(strtoupper($basicString), 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'ZYXWVUTSRQPONMLKJIHGFEDCBA');
}

$basicString = 'AAAA; 2222:)))) BCDEFGH---IJKLM=NOPQRSTUVW777XYZaaaaaaBBB';
echo 'Source string : ' . $basicString . PHP_EOL;
echo 'Mirror string : ' . mirrorLitters($basicString);

/* T.E comment:
 * 1.1 If I try to write strings to basic string, it didn't working correctly.
 */

