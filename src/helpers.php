<?php

if (! function_exists('cwd_path')) {
    /**
     * Get the path to the current working directory.
     */
    function cwd_path(string $path = ''): string
    {
        $directory = __DIR__;

        return "$directory/$path";
    }
}
