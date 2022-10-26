<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Exception;

class Permission {

    protected $methodsBlocked = [
        "edit", "show", "update", "destroy"
    ];

    public function handle(Request $request, Closure $next) {
        
        if(in_array(request()->route()->getActionMethod(), $this->methodsBlocked)) {

            $parameter = request()->route()->parameters();

            if(auth()->user()->id !== $parameter['user']->id) {
                return abort('404', 'Page not found');
            }

        }

        return $next($request);
    }

}