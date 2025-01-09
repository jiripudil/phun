<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param (callable(Value, Value): int)|null $comparator
 * @return Value|null
 */
function min(
	iterable $collection,
	callable|null $comparator = null,
): mixed
{
	$comparator ??= static fn($a, $b) => $a <=> $b;

	$min = null;

	foreach ($collection as $value) {
		if ($min === null || $comparator($min, $value) > 0) {
			$min = $value;
		}
	}

	return $min;
}
