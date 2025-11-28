<?php

declare(strict_types=1);

namespace Phun;

use function iterator_to_array;

/**
 * @template T
 * @template U
 * @param iterable<array-key, T> $collection1
 * @param iterable<array-key, U> $collection2
 * @return list<array{T, U|null}>
 */
function zip(
	iterable $collection1,
	iterable $collection2,
): array
{
	$array2 = iterator_to_array($collection2);

	$result = [];

	foreach ($collection1 as $key => $value) {
		$result[] = [$value, $array2[$key] ?? null];
	}

	return $result;
}
