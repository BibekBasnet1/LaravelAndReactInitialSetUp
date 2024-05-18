<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\HtmlString;

function vite_assets(): HtmlString
{
    $devServerIsRunning = false;
    
    if (app()->environment('local')) {
        try {
            Http::get("http://localhost:5173");
            $devServerIsRunning = true;
        } catch (Exception) {
        }
    }
    
    if ($devServerIsRunning) {
        return new HtmlString(<<<HTML
            
            <script type="module" src="http://localhost:5173/@vite/client"></script>
            <script type="module" src="http://localhost:5173/resources/js/app.js"></script>
        HTML);
    }
    
    $manifest = json_decode(file_get_contents(
        public_path('build/manifest.json')
    ), true);
    
    return new HtmlString(<<<HTML
        <script type="module" src="/build/{$manifest['resources/js/app.js']['file']}"></script>
        <link rel="stylesheet" href="/build/{$manifest['resources/js/app.js']['css'][0]}">
    HTML);
}

function successResponse(bool $status, string $message, array $data): JsonResponse
{
    $responseData = [
        'tatus' => $status,
        'essage' => $message,
        'data' => $data
    ];

    if (empty($data)) {
        $responseData['data'] = [];
    }

    return response()->json($responseData);
}

function errorResponse(bool $status, string $message, array $data): JsonResponse
{
    $responseData = [
        'status' => $status,
        'essage' => $message,
        'data' => $data
    ];

    if (empty($data)) {
        $responseData['data'] = [];
    }

    return response()->json($responseData, 400);
}


