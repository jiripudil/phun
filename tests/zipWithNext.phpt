<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$result = zipWithNext($collection);
	Assert::same([
		[72, 69],
		[69, 76],
		[76, 76],
		[76, 79],
	], $result);

	Assert::same([], zipWithNext([]));
	Assert::same([], zipWithNext([72]));
})();
