<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\meta;
class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $api = new meta();
        
        if (!$request->user()->is_admin) {
            return redirect('/user/dashboard');
            abort(403);
        }
        
        $res = $api->verify_license();
        if($res != true){
          die("
          <h3>Sorry for interrupting! Please check back later.</h3>
          ");
        }
        return $next($request);
    }
}
