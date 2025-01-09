<?php

declare(strict_types=1);

namespace Phun;

use Tester\Assert;
use function chr;

require __DIR__ . '/bootstrap.php';

(function () {
	$collection = [72, 69, 76, 76, 79];

	$result = runningFold($collection, static fn(int $charCode, string $carry) => $carry . chr($charCode), '!');
	Assert::same(['!', '!H', '!HE', '!HEL', '!HELL', '!HELLO'], $result);
})();
