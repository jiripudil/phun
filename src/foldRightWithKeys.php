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
 * @return ResultValue
 */
function foldRightWithKeys(
	iterable $collection,
	callable $accumulator,
	mixed $initialValue,
): mixed
{
	foreach (reverseWithKeys($collection) as $key => $value) {
		$initialValue = $accumulator($key, $value, $initialValue);
	}

	return $initialValue;
}
