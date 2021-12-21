<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidaPermissao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('usuario')){
            return redirect()->route('documento.index')->with("erro", "É necessário ter permissão para acessar essa página.");
        }

        return $next($request);
    }
}
