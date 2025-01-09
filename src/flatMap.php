<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @template ResultValue
 * @param iterable<Value> $collection
 * @param callable(Value): (ResultValue|iterable<ResultValue>) $transform
 * @return list<ResultValue>
 */
function flatMap(
	iterable $collection,
	callable $transform,
): array
{
	$result = [];

	foreach ($collection as $value) {
		$result[] = $transform($value);
	}

	return flatten($result);
}
