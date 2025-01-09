<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): bool $predicate
 * @return list<Value>
 */
function dropLastWhile(
	iterable $collection,
	callable $predicate,
): array
{
	$result = [];
	$reached = false;

	foreach (reverse($collection) as $value) {
		if ( ! $reached && $predicate($value)) {
			continue;
		}

		$reached = true;
		$result[] = $value;
	}

	return reverse($result);
}
