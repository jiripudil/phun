<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$charCodes = map($collection, static fn(int $value) => chr($value));
	Assert::same(['H', 'E', 'L', 'L', 'O'], $charCodes);
})();
