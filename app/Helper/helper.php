<?php 

// Banner
function banner()
{
    return \App\Models\Banner::first();
}

// Categories
function categories()
{
    return \App\Models\Category::latest()->get();
}

// General Settings
function generalsettings()
{
    return \App\Models\GeneralSetting::first();
}

// Social Urls
function socialurls()
{
    return \App\Models\Socialurl::first();
}

// Color Settings
function colorSettings()
{
    return \App\Models\ColorSetting::first();
}

// ThemeSettings
function themesettings($user_id)
{
    return \App\Models\ThemeSetting::where('user_id', $user_id)->first();
}
