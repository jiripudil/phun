<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$flatCharCodes = flatMap($collection, static fn(int $charCode) => [chr($charCode), chr($charCode)]);
	Assert::same(['H', 'H', 'E', 'E', 'L', 'L', 'L', 'L', 'O', 'O'], $flatCharCodes);

	$flatCharCodes = flatMap($collection, static fn(int $charCode) => chr($charCode));
	Assert::same(['H', 'E', 'L', 'L', 'O'], $flatCharCodes);
})();
