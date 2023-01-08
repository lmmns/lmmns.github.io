<?php

namespace App\Http\Controllers\Forge;

class SitesController extends BaseController
{
    /**
     * @param  string  $server
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($server)
    {
        $response = $this->http()->get("servers/{$server}/sites");

        return response()->json($response->json());
    }
}
