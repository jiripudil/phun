<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H', 'E', 'L', 'L', 'O'];

	$result = runningReduce($collection, static fn(string $char, string $carry) => $carry . $char);
	Assert::same(['H', 'HE', 'HEL', 'HELL', 'HELLO'], $result);

	$result = runningReduce([], static fn(string $char, string $carry) => $carry . $char);
	Assert::same([], $result);
})();
