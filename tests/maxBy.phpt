<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$min = maxBy($collection, static fn(int $value) => -$value);
	Assert::same(69, $min);

	$min = maxBy($collection, static fn(int $value) => -$value, static fn(int $a, int $b): int => $a <=> $b);
	Assert::same(69, $min);

	$min = maxBy($collection, static fn(int $value) => -$value, static fn(int $a, int $b): int => $b <=> $a);
	Assert::same(79, $min);
})();
