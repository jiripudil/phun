<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$result = findLast($collection, static fn(int $value) => $value > 70);
	Assert::same(79, $result);

	$result = findLast($collection, static fn(int $value) => $value < 70);
	Assert::same(69, $result);

	$result = findLast($collection, static fn(int $value) => $value < 60);
	Assert::null($result);
})();
