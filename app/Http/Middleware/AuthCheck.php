<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\UnauthorizedException;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has("auth")) {
            if (Route::current()->uri != "login" && Route::current()->uri != "register") {
                return redirect('login');
            }
        } else {
            if (Route::current()->uri == "login" || Route::current()->uri == "register") {
                return redirect('/');
            }

            $user_id = session()->get("auth");
            $user_details = User::select("id", "name", "email", "phone", "user_role_id","address")->where("id", $user_id)->first();
            if (Request()->route()->getPrefix() == '/admin') {
                if ($user_details->user_role_id != 2) {
                    abort( 401);
                }
            }
            $request["auth"] = $user_details;
        }
        ;
        return $next($request);
    }
}
