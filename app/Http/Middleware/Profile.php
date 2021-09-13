<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile
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
        $user = User::whereId(Auth::user()->id)->first();
        if ($user->digicash == null) {
            return redirect('profile/create')->withToastError('Data Belum Lengkap');
        }
        return $next($request);
    }
}
