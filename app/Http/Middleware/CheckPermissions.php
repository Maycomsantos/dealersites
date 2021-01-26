<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CheckPermissions
{

    use AuthorizesRequests;
    
    public function handle($request, Closure $next)
    {
        if (! in_array($request->route()->getName(), $this->exceptRoutes)) {
            $this->authorize($this->getPermission($request));
        }

        return $next($request);
    }

    protected function getPermission($request)
    {
        [$controler, $action] = array_pad(explode('.', $request->route()->getName()), 2, null);

        if (in_array($action, array_keys($this->replaceActions))) {
            $action = $this->replaceActions[$request->route()->getActionMethod()];
            return $controler . '.' . $action;
        }

        return $request->route()->getName();
    }
}