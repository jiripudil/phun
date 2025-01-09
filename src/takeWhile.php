<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @param callable(Value): bool $predicate
 * @return array<Value>
 */
function takeWhile(
	iterable $collection,
	callable $predicate,
): array
{
	$result = [];

	foreach ($collection as $value) {
		if ( ! $predicate($value)) {
			break;
		}

		$result[] = $value;
	}

	return $result;
}
