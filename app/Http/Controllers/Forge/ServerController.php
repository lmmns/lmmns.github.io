<?php

namespace App\Http\Controllers\Forge;

class ServerController extends BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $response = $this->http()->get('servers');

        return response()->json($response->json());
    }
}
