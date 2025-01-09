<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function ord;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];
	$distinct = distinctByWithKeys($collection, static fn(string $key): int => ord($key) % 10);

	Assert::same(['H' => 72, 'E' => 69, 'L' => 76], $distinct);
})();
