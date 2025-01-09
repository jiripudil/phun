<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];
	$other = [42, 49, 47, 44];

	$result = zip($collection, $other);
	Assert::same([
		[72, 42],
		[69, 49],
		[76, 47],
		[76, 44],
		[79, null],
	], $result);
})();
