<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @template ResultValue
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value, ResultValue): ResultValue $accumulator
 * @param ResultValue $initialValue
 * @return list<ResultValue>
 */
function runningFoldWithKeys(
	iterable $collection,
	callable $accumulator,
	mixed $initialValue,
): array
{
	$result = [$initialValue];

	foreach ($collection as $key => $value) {
		$result[] = $initialValue = $accumulator($key, $value, $initialValue);
	}

	return $result;
}
