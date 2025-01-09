<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];

	$flatMapped = flatMapWithKeys($collection, static fn(string $key, int $value) => [$key, $value]);
	Assert::same(['H', 72, 'E', 69, 'L', 76, 'O', 79], $flatMapped);
})();
