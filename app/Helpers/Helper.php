<?php

use App\Models\Setting;

if (! function_exists('siteInfo')) {
    function siteInfo(): Setting
    {
        return Setting::query()->where('id', 1)->first();
    }
}
