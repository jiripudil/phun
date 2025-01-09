<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];

	$result = filterWithKeys($collection, static fn(string $key, int $value) => $key < 'L' && $value > 70);
	Assert::same(['H' => 72], $result);
})();
