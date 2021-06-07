<?php


/**
 * @param string $__name
 * @param array  $__vars
 * @return mixed
 */
function loadView(string $__name, array $__vars = [])
{
	unset($__vars["__name"]);
	extract($__vars);
	return require BASE_PATH."/isolated/views/{$__name}.php";
}

/**
 * @return string
 */
function cc_asset(): string
{
	return (defined("CACHE_ASSET") && CACHE_ASSET) ? "1" : (string)time();
}
