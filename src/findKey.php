<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value): bool $predicate
 * @return Key|null
 */
function findKey(
	iterable $collection,
	callable $predicate,
): mixed
{
	foreach ($collection as $key => $value) {
		if ($predicate($key, $value)) {
			return $key;
		}
	}

	return null;
}
