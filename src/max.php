<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param (callable(Value, Value): int)|null $comparator
 * @return Value|null
 */
function max(
	iterable $collection,
	callable|null $comparator = null,
): mixed
{
	$comparator ??= static fn($a, $b) => $a <=> $b;

	$max = null;

	foreach ($collection as $value) {
		if ($max === null || $comparator($max, $value) < 0) {
			$max = $value;
		}
	}

	return $max;
}
