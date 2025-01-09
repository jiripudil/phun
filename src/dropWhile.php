<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): bool $predicate
 * @return list<Value>
 */
function dropWhile(
	iterable $collection,
	callable $predicate,
): array
{
	$result = [];
	$reached = false;

	foreach ($collection as $value) {
		if ( ! $reached && $predicate($value)) {
			continue;
		}

		$reached = true;
		$result[] = $value;
	}

	return $result;
}
