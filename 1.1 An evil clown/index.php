<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>1.1 An evil clown </h3>";

/**
 * Function to remove one (
 * @param string $basicString
 * @return string
 */
function convertingSmiley(string $basicString): string
{
    $patterns=array('/:\)\)/', '/:\(\(/');
    $replace = array (':)', ':(');
    return preg_replace($patterns, $replace, $basicString);
}

$basicString = 'An evil and gloomy :((, bald clown walks through the woods in winter.:))';

echo "Test line: {$basicString} <br>" ;
echo 'String after conversion :'.convertingSmiley($basicString);








