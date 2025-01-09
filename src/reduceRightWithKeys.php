<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value, Value): Value $reducer
 * @return Value|null
 */
function reduceRightWithKeys(
	iterable $collection,
	callable $reducer,
): mixed
{
	$reducedValue = last($collection);
	if ($reducedValue === null) {
		return null;
	}

	foreach (reverseWithKeys(dropLastWithKeys($collection, 1)) as $key => $value) {
		$reducedValue = $reducer($key, $value, $reducedValue);
	}

	return $reducedValue;
}
