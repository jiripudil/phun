<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): bool $predicate
 * @return array{list<Value>, list<Value>}
 */
function partition(
	iterable $collection,
	callable $predicate,
): array
{
	$true = $false = [];

	foreach ($collection as $value) {
		if ($predicate($value)) {
			$true[] = $value;
		} else {
			$false[] = $value;
		}
	}

	return [$true, $false];
}
