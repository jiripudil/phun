<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$max = max($collection);
	Assert::same(79, $max);

	$max = max($collection, static fn(int $a, int $b): int => $a <=> $b);
	Assert::same(79, $max);

	$max = max($collection, static fn(int $a, int $b): int => $b <=> $a);
	Assert::same(69, $max);
})();
