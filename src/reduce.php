<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value, Value): Value $reducer
 * @return Value|null
 */
function reduce(
	iterable $collection,
	callable $reducer,
): mixed
{
	$reducedValue = first($collection);
	if ($reducedValue === null) {
		return null;
	}

	foreach (drop($collection, 1) as $value) {
		$reducedValue = $reducer($value, $reducedValue);
	}

	return $reducedValue;
}
