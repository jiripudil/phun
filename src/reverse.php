<?php

declare(strict_types=1);

namespace Phun;

use function array_reverse;
use function array_values;
use function iterator_to_array;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @return list<Value>
 */
function reverse(
	iterable $collection,
): array
{
	$array = iterator_to_array($collection);
	return array_values(array_reverse($array));
}
