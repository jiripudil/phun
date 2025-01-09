<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$result = reverse($collection);
	Assert::same([79, 76, 76, 69, 72], $result);
})();
