<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 'H', 'E' => 'E', 'L' => 'L', 'O' => 'O'];

	$result = reduceRightWithKeys($collection, static fn(string $key, string $char, string $carry) => $carry . $key);
	Assert::same('OLEH', $result);

	$result = reduceRightWithKeys([], static fn(string $char, string $carry) => $carry . $char);
	Assert::same(null, $result);
})();
