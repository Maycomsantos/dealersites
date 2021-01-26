<?php

namespace App\Http\View\Composers;

use App\Models\Setting;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class SettingsComposer
{
     /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */

    public function compose(View $view)
    {
        $settings = Cache::rememberForever('settings', fn() => Setting::first());
        $view->with('settings', $settings);
    }
}
