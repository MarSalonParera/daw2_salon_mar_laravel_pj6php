<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (! Auth::check()) {
            return redirect()
                ->route('login')
                ->withErrors(['auth' => 'Has d iniciar sessio per continuar.']);
        }

        if (! in_array(Auth::user()->role, $roles, true)) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('login')
                ->withErrors(['auth' => 'Acces no autoritzat. La sessio s ha tancat per seguretat.']);
        }

        return $next($request);
    }
}
