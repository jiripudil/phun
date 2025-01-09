<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @template ResultKey of array-key
 * @param iterable<Value> $collection
 * @param callable(Value): ResultKey $selector
 * @return array<ResultKey, Value>
 */
function reindex(
	iterable $collection,
	callable $selector,
): array
{
	$result = [];

	foreach ($collection as $value) {
		$result[$selector($value)] = $value;
	}

	return $result;
}
