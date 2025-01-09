<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): bool $predicate
 * @return bool
 */
function none(
	iterable $collection,
	callable $predicate,
): bool
{
	foreach ($collection as $value) {
		if ($predicate($value)) {
			return false;
		}
	}

	return true;
}
