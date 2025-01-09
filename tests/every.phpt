<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];
	Assert::false(every($collection, static fn(int $value) => $value > 70));
	Assert::true(every($collection, static fn(int $value) => $value > 60));
	Assert::false(every($collection, static fn(int $value) => $value < 60));
})();
