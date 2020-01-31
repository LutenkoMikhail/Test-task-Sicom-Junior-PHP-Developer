<?php
require_once '.\vendor\autoload.php';

use src\Cat, src\Wolf, src\Artiodactyls, src\AquaticOrganism, src\Insect;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>3.2 Zoo </h3>";

$lion = new Cat('Lion');
echo $lion . PHP_EOL;
echo 'Voice : ' . $lion->makeSound() . PHP_EOL;

$cougar = new Cat('Cougar');
echo $cougar . PHP_EOL;
echo 'Voice : ' . $cougar->makeSound() . PHP_EOL;

$wolf = new Wolf('Wolf');
$wolf->setWaysFood('Makes food itself');
echo $wolf . PHP_EOL;

$dog = new Wolf('Dog');
$dog->setWaysFood('Asks for food from a person');
$dog->setVote('gavvvvv....');
echo $dog . PHP_EOL;

$antilopa = new \src\Artiodactyls('Antilopa', 'biy.....');
echo $antilopa . PHP_EOL;

$elephant = new \src\Artiodactyls('Elephant', 'yyyy.....');
echo $elephant . PHP_EOL;

$trout = new \src\AquaticOrganism('Fresh water', 'Trout');
echo $trout . PHP_EOL;

$shark = new \src\AquaticOrganism('salt water', 'Shark');
echo $shark . PHP_EOL;

$insect = new \src\Insect();
echo $insect . PHP_EOL;

/* T.E comments:
 * Just tip: In one namespace you can list class names with a comma. Only in PHP7+ update.
 */

