<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OobController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $other = null)
    {
        if (!$other)
            return view('api.oob');

        if ($other == 'before') {
            return view('api.oob-before');
        } else {
            return view('api.oob-after');
        }
    }
}
