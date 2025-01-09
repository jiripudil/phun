<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];
	$other = ['H' => 42, 'E' => 49, 'L' => 47];

	$result = zipWithKeys($collection, $other);
	Assert::same([
		'H' => [72, 42],
		'E' => [69, 49],
		'L' => [76, 47],
		'O' => [79, null],
	], $result);
})();
