<?php

declare(strict_types=1);

namespace Phun;

/**
 * @template Value
 * @param iterable<Value> $collection
 * @return Value|null
 */
function last(
	iterable $collection,
): mixed
{
	return first(reverse($collection));
}
