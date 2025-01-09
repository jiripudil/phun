<?php

declare(strict_types=1);

namespace Phun;

use function assert;
use function iterator_count;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @return list<array{Value, Value}>
 */
function zipWithNext(iterable $collection): iterable
{
	if (iterator_count($collection) < 2) {
		return [];
	}

	$previous = first($collection);
	assert($previous !== null);

	$result = [];

	foreach (drop($collection, 1) as $value) {
		$result[] = [$previous, $value];
		$previous = $value;
	}

	return $result;
}
