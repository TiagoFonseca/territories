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
            // $menu->add('Users', 'users');
            $menu->add('All Maps', 'maps');
            $menu->add('My Maps', 'my-maps');
            $menu->add('My Requests', 'my-requests');
                // $menu->maps->add('View all', 'maps');
                // $menu->maps->add('View available', 'maps/available');
                // $menu->maps->add('Create territory', 'maps/create');
            // $menu->add('Slips', 'territories/slips');
            //     $menu->slips->add('View all', 'slips');
            //     $menu->slips->add('Create slip', 'slips/create');
            // $menu->add('Assignments', 'territories/assignments');
            //     $menu->assignments->add('View all', 'assignments');
            //     $menu->assignments->add('View finished', 'assignments/finished');
            //     $menu->assignments->add('View unfinished', 'assignments/unfinished');
            //     $menu->assignments->add('Assign territory', 'assignments/create');


        });

        return $next($request);
    }
}
