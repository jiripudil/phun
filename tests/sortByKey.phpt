<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];

	$result = sortByKey($collection);
	Assert::same(['E' => 69, 'H' => 72, 'L' => 76, 'O' => 79], $result);

	$result = sortByKey($collection, static fn(string $a, string $b) => $a <=> $b);
	Assert::same(['E' => 69, 'H' => 72, 'L' => 76, 'O' => 79], $result);

	$result = sortByKey($collection, static fn(string $a, string $b) => $b <=> $a);
	Assert::same(['O' => 79, 'L' => 76, 'H' => 72, 'E' => 69], $result);
})();
