<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): bool $predicate
 * @return Value|null
 */
function find(
	iterable $collection,
	callable $predicate,
): mixed
{
	foreach ($collection as $value) {
		if ($predicate($value)) {
			return $value;
		}
	}

	return null;
}
