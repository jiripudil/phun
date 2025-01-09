<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @template ResultValue
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value): (ResultValue|iterable<ResultValue>) $transform
 * @return list<ResultValue>
 */
function flatMapWithKeys(
	iterable $collection,
	callable $transform,
): array
{
	$result = [];

	foreach ($collection as $key => $value) {
		$result[] = $transform($key, $value);
	}

	return flatten($result);
}
