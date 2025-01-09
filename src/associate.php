<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Item
 * @template Key of array-key
 * @template Value
 * @param iterable<Item> $collection
 * @param callable(Item): array{Key, Value} $transform
 * @return array<Key, Value>
 */
function associate(
	iterable $collection,
	callable $transform,
): array
{
	$result = [];

	foreach ($collection as $value) {
		[$key, $transformedValue] = $transform($value);
		$result[$key] = $transformedValue;
	}

	return $result;
}
