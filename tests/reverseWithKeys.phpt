<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];

	$result = reverseWithKeys($collection);
	Assert::same(['O' => 79, 'L' => 76, 'E' => 69, 'H' => 72], $result);
})();
