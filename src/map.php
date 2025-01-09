<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @template ResultValue
 * @param iterable<Value> $collection
 * @param callable(Value): ResultValue $transform
 * @return list<ResultValue>
 */
function map(
	iterable $collection,
	callable $transform,
): array
{
	$result = [];

	foreach ($collection as $value) {
		$result[] = $transform($value);
	}

	return $result;
}
