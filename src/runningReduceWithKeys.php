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
function runningReduceWithKeys(
	iterable $collection,
	callable $accumulator,
): array
{
	$reducedValue = first($collection);
	if ($reducedValue === null) {
		return [];
	}

	$result = [$reducedValue];

	foreach (dropWithKeys($collection, 1) as $key => $value) {
		$result[] = $reducedValue = $accumulator($key, $value, $reducedValue);
	}

	return $result;
}
