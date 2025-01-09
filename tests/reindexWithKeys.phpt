<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function ord;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];

	$byCharCode = reindexWithKeys($collection, static fn(string $key, int $value) => ord($key));

	Assert::same([
		72 => 72,
		69 => 69,
		76 => 76,
		79 => 79,
	], $byCharCode);
})();
