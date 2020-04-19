<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseStatusCodeSame;

class verifyLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //verifica se o utilizador está logado
    public function handle($request, Closure $next)
    {
        //procura na base de dados por um utilizador que tenha este token
        $user = User::where('api_token', $request->header('api_token'))->first();
        if (!$user) {
            return response()->json(['error' => '403'], 403);
        }
        return $next($request);
    }
}
