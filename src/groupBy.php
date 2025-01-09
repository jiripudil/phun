<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @template Discriminator of array-key
 * @param iterable<Value> $collection
 * @param callable(Value): Discriminator $selector
 * @return array<Discriminator, list<Value>>
 */
function groupBy(
	iterable $collection,
	callable $selector,
): array
{
	$groups = [];

	foreach ($collection as $value) {
		$groupKey = $selector($value);
		$groups[$groupKey][] = $value;
	}

	return $groups;
}
