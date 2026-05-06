<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(58, 44, 9, 83);
assert(DomainReviewLens::score($item) === 216);
assert(DomainReviewLens::lane($item) === "ship");
