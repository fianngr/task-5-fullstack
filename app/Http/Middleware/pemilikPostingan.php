<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pemilikPostingan
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
        $currentUser = Auth::user();
        $article = articles::findOrFail($request->id);
        if ($article->user_id != $currentUser->id){
            return response()->json(['message'=> 'you not have permission update this postingan'],404);
        }

        return $next($request);
    }
}
