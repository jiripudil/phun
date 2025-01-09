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
function fold(
	iterable $collection,
	callable $accumulator,
	mixed $initialValue,
): mixed
{
	foreach ($collection as $value) {
		$initialValue = $accumulator($value, $initialValue);
	}

	return $initialValue;
}
