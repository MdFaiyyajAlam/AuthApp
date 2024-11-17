<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // echo "<h3 class='text-primary text-center'> This Valid User Middleware.</h3>";
        // echo "<h1>".$role."</h1>";

        if (Auth::user()->role == $role) {
        return $next($request);
        }elseif (Auth::user()->role == 'reader'){
            return redirect()->route('user');
        } else {
            return redirect()->route('login');
            }
    }

    public function terminate(Request $request, Response $response){

        // echo '<h3 class="text-danger">We are Terminate ValidUser Middleware.</h3>';
    }
}
