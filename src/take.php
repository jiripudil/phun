<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param positive-int $count
 * @return list<Value>
 */
function take(
	iterable $collection,
	int $count,
): array
{
	$result = [];
	$i = 0;

	foreach ($collection as $value) {
		if ($i++ >= $count) {
			break;
		}

		$result[] = $value;
	}

	return $result;
}
