<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value, Value): Value $accumulator
 * @return list<Value>
 */
function runningReduceRightWithKeys(
	iterable $collection,
	callable $accumulator,
): array
{
	$reducedValue = last($collection);
	if ($reducedValue === null) {
		return [];
	}

	$result = [$reducedValue];

	foreach (reverseWithKeys(dropLastWithKeys($collection, 1)) as $key => $value) {
		$result[] = $reducedValue = $accumulator($key, $value, $reducedValue);
	}

	return $result;
}
