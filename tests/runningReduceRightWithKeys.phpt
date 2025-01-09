<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72 => 'H', 69 => 'E', 76 => 'L', 79 => 'O'];

	$result = runningReduceRightWithKeys($collection, static fn(int $key, string $char, string $carry) => $carry . chr($key));
	Assert::same(['O', 'OL', 'OLE', 'OLEH'], $result);

	$result = runningReduceRightWithKeys([], static fn(string $char, string $carry) => $carry . $char);
	Assert::same([], $result);
})();
