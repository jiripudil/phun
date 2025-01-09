<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key, Value> $collection
 * @param positive-int $count
 * @return array<Key, Value>
 */
function dropWithKeys(
	iterable $collection,
	int $count,
): array
{
	$result = [];
	$i = 0;

	foreach ($collection as $key => $value) {
		if ($i++ < $count) {
			continue;
		}

		$result[$key] = $value;
	}

	return $result;
}
