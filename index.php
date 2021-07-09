<?php 

require_once __DIR__.'/src/CalculatorInterface.php';
require_once __DIR__.'/src/AbstractCalculator.php';
require_once __DIR__.'/src/FirstRuleCalculator.php';
require_once __DIR__.'/src/SecondRuleCalculator.php';
require_once __DIR__.'/src/ThirdRuleCalculator.php';
require_once __DIR__.'/src/FourthRuleCalculator.php';
require_once __DIR__.'/src/PPH21Calculator.php';

use ModernOOP\StudiKasus\PPH21\FirstRuleCalculator;
use ModernOOP\StudiKasus\PPH21\SecondRuleCalculator;
use ModernOOP\StudiKasus\PPH21\ThirdRuleCalculator;
use ModernOOP\StudiKasus\PPH21\FourthRuleCalculator;
use ModernOOP\StudiKasus\PPH21\PPH21Calculator;

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator();
$third = new ThirdRuleCalculator();
$fourth = new FourthRuleCalculator();

$calcuator = new PPH21Calculator($first, $second, $third, $fourth);

echo $calcuator->calculate(30000000);
echo PHP_EOL;   
