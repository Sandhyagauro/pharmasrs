<?php
namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Support\Facades\Session;

// ...
class RoleMiddleware
{

    public function handle($request, Closure $next, $role, $permission = '')
    {
//        $user = Auth::user();
//        if (Auth::guest()) {
//            return redirect('/login');
//        }
//
        if (Auth::guest()) {
            return redirect('/login');
        }



        if (! $request->user()->hasRole($role)) {
            Session::flash('message', 'Sorry!! you dont have permission to access this page');
            return redirect('/404');
        }

//        if (! $request->user()->can($permission)) {
//            abort(403);
//        }

        return $next($request);
    }
}