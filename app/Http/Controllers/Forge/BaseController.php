<?php

namespace App\Http\Controllers\Forge;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

abstract class BaseController extends Controller
{
    protected string $base_url = 'https://forge.laravel.com/api/v1';

    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            if ($request->header('X-Mobile-App-ID') !== env('MOBILE_APP_ID')) {
                abort(401);
            }

            return $next($request);
        });
    }

    protected function http(): PendingRequest
    {
        return Http::baseUrl($this->base_url)
            ->withToken($this->token())
            ->acceptJson();
    }

    protected function token(): string
    {
        return env('FORGE_API_TOKEN');
    }
}
