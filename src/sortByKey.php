<?php

declare(strict_types=1);

namespace Phun;

use function iterator_to_array;
use function uksort;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key, Value> $collection
 * @param (callable(Key, Key): int)|null $comparator
 * @return array<Key, Value>
 */
function sortByKey(
	iterable $collection,
	callable|null $comparator = null,
): array
{
	$comparator ??= static fn($a, $b) => $a <=> $b;

	$array = iterator_to_array($collection);
	uksort($array, $comparator);

	return $array;
}
