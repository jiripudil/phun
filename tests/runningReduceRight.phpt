<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H', 'E', 'L', 'L', 'O'];

	$result = runningReduceRight($collection, static fn(string $char, string $carry) => $carry . $char);
	Assert::same(['O', 'OL', 'OLL', 'OLLE', 'OLLEH'], $result);

	$result = runningReduceRight([], static fn(string $char, string $carry) => $carry . $char);
	Assert::same([], $result);
})();
