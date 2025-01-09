<?php

declare(strict_types=1);

namespace Phun;

use function in_array;

/**
 * @template Value
 * @template Discriminator
 * @param iterable<Value> $collection
 * @param callable(Value): Discriminator $selector
 * @return list<Value>
 */
function distinctBy(
	iterable $collection,
	callable $selector,
): array
{
	$result = [];
	$indices = [];

	foreach ($collection as $value) {
		$index = $selector($value);
		if ( ! in_array($index, $indices, strict: true)) {
			$result[] = $value;
			$indices[] = $index;
		}
	}

	return $result;
}
