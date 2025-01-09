<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];

	$result = findKey($collection, static fn(string $key, int $value) => $value > 70);
	Assert::same('H', $result);

	$result = findKey($collection, static fn(string $key, int $value) => $value < 70);
	Assert::same('E', $result);

	$result = findKey($collection, static fn(string $key, int $value) => $value < 60);
	Assert::null($result);
})();
