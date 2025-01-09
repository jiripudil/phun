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
function minBy(
	iterable $collection,
	callable $selector,
	callable|null $comparator = null,
): mixed
{
	$comparator ??= static fn($a, $b) => $a <=> $b;

	$min = null;

	foreach ($collection as $value) {
		$comparedValue = $selector($value);
		if ($min === null || $comparator($min[0], $comparedValue) > 0) {
			$min = [$comparedValue, $value];
		}
	}

	return $min[1] ?? null;
}
