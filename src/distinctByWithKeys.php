<?php

declare(strict_types=1);

namespace Phun;

use function in_array;

/**
 * @template Key of array-key
 * @template Value
 * @template Discriminator
 * @param iterable<Key, Value> $collection
 * @param callable(Key, Value): Discriminator $selector
 * @return array<Key, Value>
 */
function distinctByWithKeys(
	iterable $collection,
	callable $selector,
): array
{
	$result = [];
	$indices = [];

	foreach ($collection as $key => $value) {
		$index = $selector($key, $value);
		if ( ! in_array($index, $indices, strict: true)) {
			$result[$key] = $value;
			$indices[] = $index;
		}
	}

	return $result;
}
