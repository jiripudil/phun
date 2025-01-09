<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];
	$distinct = distinctBy($collection, static fn(int $value): int => $value % 10);

	Assert::same([72, 69, 76], $distinct);
})();
