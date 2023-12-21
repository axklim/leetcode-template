<?php

require_once __DIR__ . '/Solution.php';

$app = new Solution();

$r = $app->solutionName('III');

assert(1 === $r, "Great Success!");
