<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Key of array-key
 * @template Value
 * @template Discriminator of array-key
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value): Discriminator $selector
 * @return array<Discriminator, array<Key, Value>>
 */
function groupByWithKeys(
	iterable $collection,
	callable $selector,
): array
{
	$groups = [];

	foreach ($collection as $key => $value) {
		$groupKey = $selector($key, $value);
		$groups[$groupKey][$key] = $value;
	}

	return $groups;
}
