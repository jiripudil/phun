<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @template ResultValue
 * @param iterable<Value> $collection
 * @param callable(Value, ResultValue): ResultValue $accumulator
 * @param ResultValue $initialValue
 * @return list<ResultValue>
 */
function runningFoldRight(
	iterable $collection,
	callable $accumulator,
	mixed $initialValue,
): array
{
	$result = [$initialValue];

	foreach (reverse($collection) as $value) {
		$result[] = $initialValue = $accumulator($value, $initialValue);
	}

	return $result;
}