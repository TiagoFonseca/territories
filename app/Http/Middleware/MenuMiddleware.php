<?php

namespace App\Http\Middleware;

use Menu;
use Closure;

class MenuMiddleware
{

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('MyNavBar', function($menu) {
            $menu->add('Assignments', 'territories/assignments');
                $menu->assignments->add('View all', 'assignments');
                $menu->assignments->add('View finished', 'assignments/finished');
                $menu->assignments->add('View unfinished', 'assignments/unfinished');
                $menu->assignments->add('Assign territory', 'assignments/create');
            // $menu->add('Maps', 'territories/maps');
            //     $menu->territories->add('View all', 'maps');
            //     $menu->territories->add('View available', 'available');
            //     $menu->territories->add('View unavailable', 'unavailable');
            //     $menu->territories->add('Create territory', 'create');
        });

        return $next($request);
    }
}
