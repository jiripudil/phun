<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$result = first($collection);
	Assert::same(72, $result);

	$result = first([]);
	Assert::null($result);
})();
