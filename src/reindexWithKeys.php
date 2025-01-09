<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @template ResultKey of array-key
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value): ResultKey $selector
 * @return array<ResultKey, Value>
 */
function reindexWithKeys(
	iterable $collection,
	callable $selector,
): array
{
	$result = [];

	foreach ($collection as $key => $value) {
		$result[$selector($key, $value)] = $value;
	}

	return $result;
}
