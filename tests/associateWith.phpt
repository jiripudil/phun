<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];
	$byCharCode = associateWith($collection, static fn(int $value) => chr($value));

	Assert::same([
		72 => 'H',
		69 => 'E',
		76 => 'L',
		79 => 'O',
	], $byCharCode);
})();
