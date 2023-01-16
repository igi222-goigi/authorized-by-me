<?php

use App\Models\Settings;

if (!function_exists('test_function')) {
    function test_function()
    {
        echo "Hello from helper";
    }
}

if (!function_exists('app_settings')) {
    function app_settings()
    {
        return Settings::first();
    }
}
