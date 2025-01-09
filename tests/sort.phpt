<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$result = sort($collection);
	Assert::same([69, 72, 76, 76, 79], $result);

	$result = sort($collection, static fn(int $a, int $b) => $a <=> $b);
	Assert::same([69, 72, 76, 76, 79], $result);

	$result = sort($collection, static fn(int $a, int $b) => $b <=> $a);
	Assert::same([79, 76, 76, 72, 69], $result);
})();
