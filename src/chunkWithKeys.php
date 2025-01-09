<?php

declare(strict_types=1);

namespace Phun;

use function array_is_list;
use function assert;
use function intdiv;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key, Value> $collection
 * @param positive-int $size
 * @return list<non-empty-array<Key, Value>>
 */
function chunkWithKeys(
	iterable $collection,
	int $size,
): array
{
	$i = 0;
	$result = [];

	foreach ($collection as $key => $value) {
		$chunk = intdiv($i, $size);
		$result[$chunk][$key] = $value;
		$i++;
	}

	assert(array_is_list($result));
	return $result;
}
