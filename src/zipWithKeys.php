<?php

declare(strict_types=1);

namespace Phun;

use function iterator_to_array;

/**
 * @template Key of array-key
 * @template T
 * @template U
 * @param iterable<Key, T> $collection1
 * @param iterable<Key, U> $collection2
 * @return array<Key, array{T, U|null}>
 */
function zipWithKeys(
	iterable $collection1,
	iterable $collection2,
): array
{
	$array2 = iterator_to_array($collection2);

	$result = [];

	foreach ($collection1 as $key => $value) {
		$result[$key] = [$value, $array2[$key] ?? null];
	}

	return $result;
}
