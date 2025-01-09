<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): Key $keySelector
 * @return array<Key, Value>
 */
function associateBy(
	iterable $collection,
	callable $keySelector,
): array
{
	$result = [];

	foreach ($collection as $value) {
		$key = $keySelector($value);
		$result[$key] = $value;
	}

	return $result;
}
