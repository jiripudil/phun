<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value, Value): Value $accumulator
 * @return list<Value>
 */
function runningReduceRight(
	iterable $collection,
	callable $accumulator,
): array
{
	$reducedValue = last($collection);
	if ($reducedValue === null) {
		return [];
	}

	$result = [$reducedValue];

	foreach (reverse(dropLast($collection, 1)) as $value) {
		$result[] = $reducedValue = $accumulator($value, $reducedValue);
	}

	return $result;
}
