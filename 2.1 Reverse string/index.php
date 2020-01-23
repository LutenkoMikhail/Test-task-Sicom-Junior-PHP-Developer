<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>2.1 Reverse string. </h3>";

/**
 * The function returns the inverted string backwards
 * @param string $basicString
 * @return string
 */
function reverseString(string $basicString):string
{
    $returnString = '';
    for ($iteratorString = strlen($basicString)-1; $iteratorString >= 0; $iteratorString--) {
        $returnString .= $basicString[$iteratorString];
    }
    return $returnString;
}
$basicString = 'Write with PHP a function with functional like strrev().';
echo "Start line:{$basicString}<br>";
echo 'Inverted line:'.reverseString($basicString);





