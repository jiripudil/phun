<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];

	$chars = mapWithKeys($collection, static fn(string $key) => $key);
	Assert::same(['H' => 'H', 'E' => 'E', 'L' => 'L', 'O' => 'O'], $chars);
})();
