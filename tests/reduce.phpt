<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H', 'E', 'L', 'L', 'O'];

	$result = reduce($collection, static fn(string $char, string $carry) => $carry . $char);
	Assert::same('HELLO', $result);

	$result = reduce([], static fn(string $char, string $carry) => $carry . $char);
	Assert::same(null, $result);
})();
