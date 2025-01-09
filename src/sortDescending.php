<?php

declare(strict_types=1);

namespace Phun;

use function iterator_to_array;
use function usort;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param (callable(Value, Value): int)|null $comparator
 * @return list<Value>
 */
function sortDescending(
	iterable $collection,
	callable|null $comparator = null,
): array
{
	$comparator ??= static fn($a, $b) => $a <=> $b;

	$array = iterator_to_array($collection);
	usort($array, static fn($a, $b) => -$comparator($a, $b));

	return $array;
}
