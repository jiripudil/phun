<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): bool $predicate
 * @return list<Value>
 */
function filter(
	iterable $collection,
	callable $predicate,
): array
{
	$result = [];

	foreach ($collection as $value) {
		if ($predicate($value)) {
			$result[] = $value;
		}
	}

	return $result;
}
