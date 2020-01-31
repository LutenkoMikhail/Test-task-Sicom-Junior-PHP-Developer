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
function reverseString(string $basicString): string
{
    $returnString = '';
    for ($iteratorString = strlen($basicString) - 1; $iteratorString >= 0; $iteratorString--) {
        $returnString .= $basicString[$iteratorString];
    }
    return $returnString;
}

$basicString = 'Write with PHP a function with functional like strrev().';
echo "Start line:{$basicString}" . PHP_EOL;
echo 'Inverted line:' . reverseString($basicString);

/* T.E commnets:
 * Just tip:
 * Very good implementation of this task. But it looks badly readable,
 * if you run it in the console instead of the browser,
 * next time try to use predefined constants PHP_EOL instead of html tag <br/>
 */




