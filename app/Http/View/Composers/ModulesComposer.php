<?php

namespace App\Http\View\Composers;

use Gate;
use Illuminate\View\View;

class ModulesComposer
{

    /**
     * Get Allowed User Abas
     *
     * @return array
     */

    public function get_allowed_modules()
    {
        $modules = config('modules');

        $allowed_modules = [];
        foreach ($modules as $aba => $options) {

            foreach ($options['menus'] as $menu) {

                if (! Gate::check($menu['route'])) continue;

                $allowed_modules[$aba]['icon']    = $options['icon'];
                $allowed_modules[$aba]['menus'][] = $menu;
            }
        }

        return array_obj($allowed_modules);
    }

     /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */

    public function compose(View $view)
    {
        $view->with('modules', $this->get_allowed_modules());
    }
}
