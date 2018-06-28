<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Request;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->check($request);
        return $next($request);
    }
    //验证api请求合法性
    protected function check($request)
    {

    }
}
