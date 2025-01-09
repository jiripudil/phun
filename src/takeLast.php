<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param positive-int $count
 * @return list<Value>
 */
function takeLast(
	iterable $collection,
	int $count,
): array
{
	$result = [];
	$i = 0;

	foreach (reverse($collection) as $value) {
		if ($i++ >= $count) {
			break;
		}

		$result[] = $value;
	}

	return reverse($result);
}
