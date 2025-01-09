<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @template Discriminator
 * @param iterable<Value> $collection
 * @param callable(Value): Discriminator $selector
 * @param (callable(Discriminator, Discriminator): int)|null $comparator
 * @return Value|null
 */
function maxBy(
	iterable $collection,
	callable $selector,
	callable|null $comparator = null,
): mixed
{
	$comparator ??= static fn($a, $b) => $a <=> $b;

	$max = null;

	foreach ($collection as $value) {
		$comparedValue = $selector($value);
		if ($max === null || $comparator($max[0], $comparedValue) < 0) {
			$max = [$comparedValue, $value];
		}
	}

	return $max[1] ?? null;
}
