<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value, Value): Value $reducer
 * @return Value|null
 */
function reduceRight(
	iterable $collection,
	callable $reducer,
): mixed
{
	$reducedValue = last($collection);
	if ($reducedValue === null) {
		return null;
	}

	foreach (reverse(dropLast($collection, 1)) as $value) {
		$reducedValue = $reducer($value, $reducedValue);
	}

	return $reducedValue;
}
