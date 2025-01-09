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
function takeWithKeysWhile(
	iterable $collection,
	callable $predicate,
): array
{
	$result = [];

	foreach ($collection as $key => $value) {
		if ( ! $predicate($key, $value)) {
			break;
		}

		$result[$key] = $value;
	}

	return $result;
}
