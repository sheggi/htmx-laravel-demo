<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HtmxPreviewWrapper
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->header('Hx-Request') || !config('app.hx-reload')) {
            return $response;
        }

        $response->setContent(view('preview', ['content' => $response->getContent()]));
        return $response;
    }
}
