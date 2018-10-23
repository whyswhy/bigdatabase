<?php

namespace App\Http\Middleware;

use Closure;

class CheckPower
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
        $apath = $request->getPathInfo();
        $path = ltrim($apath, '/');
        $Auth = session('Auth');
        $state = false;
         if (session('aname')) {
                foreach ($Auth['menu'] as $key => $value) {
              foreach ($value as $key => $v) {
                if ($v->url == $path) {
                    $state = true;
                    break; 
                }              
            }
        }
        return !$state ? die('没有权限') : $next($request);
        //return $next($request);
        } else {
            echo "您还没有登录!";die();
        }
            

        
    }
}
