<?php

/**
 * @param int     $n
 * @param ?string $e
 * @return string
 */
function rstr(int $n, ?string $e = NULL): string
{
	$n = abs($n) & 0xffff;

	if ($e === NULL || $e === "")
		$e = "qwertyuiopasdfghjklzxcnmmQWEOPASDFJKLZXCNM1234567890__..";

	$c = strlen($e) - 1;
	$r = str_repeat("\0", $n);

	for ($i = 0; $i < $n; $i++)
		$r[$i] = $e[rand(0, $c)];

	return $r;
}
