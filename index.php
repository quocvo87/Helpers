<?php

require __DIR__.'/vendor/autoload.php';

use TrueMe\Support\Arr;

/////////////////////////////////////////

echo '-------------------------------------------------' . '</br>';
echo '|Case1 ----------------------------------------' . '</br>';
echo '|__+ check existing function--' . '</br>';
echo '-----------------------------------------------' . '</br>';
echo 'Step1---------';
$m1 = memory_get_usage();
echo $m1;
echo '</br>';


$appendConfig = append_config([1,2,5,4,3]);


echo 'Step2---------';
$m2 = memory_get_usage();
echo $m2;
echo '</br>';

echo '---------------';
echo '</br>';
echo 'Used: ' . ($m2-$m1);
echo '</br>';
echo '----------------------------------------' . '</br>';

var_dump('$appendConfig', $appendConfig);

