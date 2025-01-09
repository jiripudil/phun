<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];
	$byCharCode = groupByWithKeys($collection, static fn(string $key, int $value) => $value % 10);

	Assert::same([
		2 => ['H' => 72],
		9 => ['E' => 69, 'O' => 79],
		6 => ['L' => 76],
	], $byCharCode);
})();
