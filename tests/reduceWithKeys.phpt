<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 'H', 'E' => 'E', 'L' => 'L', 'O' => 'O'];

	$result = reduceWithKeys($collection, static fn(string $key, string $char, string $carry) => $carry . $key);
	Assert::same('HELO', $result);

	$result = reduceWithKeys([], static fn(string $char, string $carry) => $carry . $char);
	Assert::same(null, $result);
})();
