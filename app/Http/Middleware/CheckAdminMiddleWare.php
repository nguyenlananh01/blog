<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\False_;

class CheckAdminMiddleWare
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
        //Khi vao trang admin va cac trang con cua trang admin (admin/create, admin/info ...)
        //dieu kien la ca tham so check > 10 , nguoc lai tra ve trang info
        if($request->has('check')) {
            $check = $request->check;
            if($check > 10){
                return $next($request);
            } else {
                return redirect()->route('laravel');
            }
        }

    }
}
