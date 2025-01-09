<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];
	$result = dropWithKeys($collection, 2);

	Assert::same(['L' => 76, 'O' => 79], $result);
})();
