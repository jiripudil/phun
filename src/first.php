<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @return Value|null
 */
function first(
	iterable $collection,
): mixed
{
	foreach ($collection as $value) {
		return $value;
	}

	return null;
}
