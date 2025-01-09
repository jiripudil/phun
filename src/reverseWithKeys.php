<?php

declare(strict_types=1);

namespace Phun;

use function array_reverse;
use function iterator_to_array;

/**
 * @template Key of array-key
 * @template Value
 * @param iterable<Key, Value> $collection
 * @return array<Key, Value>
 */
function reverseWithKeys(
	iterable $collection,
): array
{
	$array = iterator_to_array($collection);
	return array_reverse($array, preserve_keys: true);
}
