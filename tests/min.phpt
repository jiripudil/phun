<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$min = min($collection);
	Assert::same(69, $min);

	$min = min($collection, static fn(int $a, int $b): int => $a <=> $b);
	Assert::same(69, $min);

	$min = min($collection, static fn(int $a, int $b): int => $b <=> $a);
	Assert::same(79, $min);
})();
