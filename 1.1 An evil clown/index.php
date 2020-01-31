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
    $patterns=array('/:\){2,}/', '/:\({2,}/');
    $replace = array (':)', ':(');
    return preg_replace($patterns, $replace, $basicString);
}

$basicString = 'An evil :((( and gloomy :(((, bald :( clown walks through :)))) the woods in winter. :)';

echo "Test line: {$basicString} ".PHP_EOL ;
echo 'String after conversion :'.convertingSmiley($basicString);

/* T.E comments:
 * 1.1 This method should be able to leave 1 bracket,
 *  even if there are 10 or more brackets in a row in the text,
 *  this implementation removes only the second bracket from the smiles,
 *  if I change the number of brackets more than 2, this implementation will not work.
 * 1.2 If we have a poor understanding of regular expressions, then other methods can be used to accomplish this task.
 */



