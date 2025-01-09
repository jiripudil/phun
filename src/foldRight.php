<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @template ResultValue
 * @param iterable<Value> $collection
 * @param callable(Value, ResultValue): ResultValue $accumulator
 * @param ResultValue $initialValue
 * @return ResultValue
 */
function foldRight(
	iterable $collection,
	callable $accumulator,
	mixed $initialValue,
): mixed
{
	foreach (reverse($collection) as $value) {
		$initialValue = $accumulator($value, $initialValue);
	}

	return $initialValue;
}
