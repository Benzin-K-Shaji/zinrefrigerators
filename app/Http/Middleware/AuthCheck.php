<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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
        if(session()->has('uname') )
        {
            if(session('uname')=='admin')
            {
                if($request->path()!='ah' && $request->path()!='ap' && $request->path()!='userview' && $request->path()!='vieworders'&& $request->path()!='delete/{id}')
                {
                    return back();
                }

            }
            else
            {
                if($request->path()!='uh' && $request->path()!='uc'&& $request->path()!='ug'&& $request->path()!='pv'&& $request->path()!='cartlist'&& $request->path()!='myorders'&&  $request->path()!='ordernow')
                {
                    return back();
                }

            }

        }
        else
        {
            if($request->path()!='/'  && $request->path()!='reg' && $request->path()!='cg' && $request->path()!='cc' && $request->path()!='l')
            {
                return redirect('/l')->with ('fail','You must be logged in');
            }

        }



        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }
        
    
}
