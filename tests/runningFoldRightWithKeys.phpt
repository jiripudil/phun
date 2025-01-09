<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = ['H' => 72, 'E' => 69, 'L' => 76, 'O' => 79];

	$result = runningFoldRightWithKeys($collection, static fn(string $key, int $charCode, string $carry) => $carry . $key, '!');
	Assert::same(['!', '!O', '!OL', '!OLE', '!OLEH'], $result);
})();
