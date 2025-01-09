<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];
	$byCharCode = groupBy($collection, static fn(int $value) => chr($value));

	Assert::same([
		'H' => [72],
		'E' => [69],
		'L' => [76, 76],
		'O' => [79],
	], $byCharCode);
})();
