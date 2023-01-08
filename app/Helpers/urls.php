<?php

function domain(string $url = null): string
{
    $url = $url ?? config('app.url');

    if (! validate($url, 'required|url')) {
        throw new RuntimeException("No valid URL to work with.");
    }

    $parts = parse_url($url);

    return data_get($parts, 'host');
}
