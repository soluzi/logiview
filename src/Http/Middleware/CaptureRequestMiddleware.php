<?php

namespace Soluzi\LogiView\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class CaptureRequestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $contractLogFile = storage_path('logs/contract_activity.log');
        if (!File::exists($contractLogFile)) {
            File::put($contractLogFile, '');
        }

        Log::channel('contract_activity')->info('Incoming Request', [
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'headers' => $request->headers->all(),
            'body' => $request->all()
        ]);

        return $next($request);
    }
}
