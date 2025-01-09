<?php

declare(strict_types=1);

namespace Phun;

use function is_iterable;

/**
 * @template Value
 * @param iterable<Value|iterable<Value>> $collection
 * @return list<Value>
 */
function flatten(
	iterable $collection,
): array
{
	$result = [];

	foreach ($collection as $subCollection) {
		if ( ! is_iterable($subCollection)) {
			$subCollection = [$subCollection];
		}

		foreach ($subCollection as $value) {
			$result[] = $value;
		}
	}

	return $result;
}
