<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): bool $predicate
 * @return list<Value>
 */
function takeLastWhile(
	iterable $collection,
	callable $predicate,
): array
{
	$result = [];

	foreach (reverse($collection) as $value) {
		if ( ! $predicate($value)) {
			break;
		}

		$result[] = $value;
	}

	return reverse($result);
}
