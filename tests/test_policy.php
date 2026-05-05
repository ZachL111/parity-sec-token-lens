<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(68, 78, 19, 13, 5);
assert(Policy::score($signal_case_1) === 90);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(90, 86, 10, 5, 10);
assert(Policy::score($signal_case_2) === 256);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(87, 71, 13, 11, 8);
assert(Policy::score($signal_case_3) === 175);
assert(Policy::classify($signal_case_3) === "accept");
