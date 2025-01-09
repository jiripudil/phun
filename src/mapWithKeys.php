<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @template ResultValue
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value): ResultValue $transform
 * @return array<Key, ResultValue>
 */
function mapWithKeys(
	iterable $collection,
	callable $transform,
): array
{
	$result = [];

	foreach ($collection as $key => $value) {
		$result[$key] = $transform($key, $value);
	}

	return $result;
}
