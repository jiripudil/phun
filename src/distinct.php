<?php

declare(strict_types=1);

namespace Phun;

use function in_array;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @return list<Value>
 */
function distinct(
	iterable $collection,
): array
{
	$result = [];
	$indices = [];

	foreach ($collection as $value) {
		if ( ! in_array($value, $indices, strict: true)) {
			$result[] = $value;
			$indices[] = $value;
		}
	}

	return $result;
}
