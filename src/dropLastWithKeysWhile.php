<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value): bool $predicate
 * @return array<Key, Value>
 */
function dropLastWithKeysWhile(
	iterable $collection,
	callable $predicate,
): array
{
	$result = [];
	$reached = false;

	foreach (reverseWithKeys($collection) as $key => $value) {
		if ( ! $reached && $predicate($key, $value)) {
			continue;
		}

		$reached = true;
		$result[$key] = $value;
	}

	return reverseWithKeys($result);
}
