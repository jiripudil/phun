<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function ord;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];
	$result = dropWithKeysWhile($collection, static fn(string $key) => ord($key) > 70);

	Assert::same(['E' => 69, 'L' => 76, 'O' => 79], $result);
})();
