<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key> $collection
 * @param callable(Key): Value $valueSelector
 * @return array<Key, Value>
 */
function associateWith(
	iterable $collection,
	callable $valueSelector,
): array
{
	$result = [];

	foreach ($collection as $key) {
		$value = $valueSelector($key);
		$result[$key] = $value;
	}

	return $result;
}
