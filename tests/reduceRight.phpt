<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H', 'E', 'L', 'L', 'O'];

	$result = reduceRight($collection, static fn(string $char, string $carry) => $carry . $char);
	Assert::same('OLLEH', $result);

	$result = reduceRight([], static fn(string $char, string $carry) => $carry . $char);
	Assert::same(null, $result);
})();
