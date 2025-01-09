<?php

declare(strict_types=1);

namespace Phun;

use function array_is_list;
use function assert;
use function intdiv;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param positive-int $size
 * @return list<non-empty-list<Value>>
 */
function chunk(
	iterable $collection,
	int $size,
): array
{
	$i = 0;
	$result = [];

	foreach ($collection as $value) {
		$chunk = intdiv($i, $size);
		$result[$chunk][] = $value;
		$i++;
	}

	assert(array_is_list($result));
	return $result;
}
