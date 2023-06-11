<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Send a success response.
     *
     * @param array|object|null $data
     * @param null $message
     * @param int $code
     *
     * @return JsonResponse
     */
    public function sendResponse(array|object|null $data, $message = null, int $code = 200): JsonResponse
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($response, $code);
    }

    /**
     * Send an error response.
     *
     * @param string $error
     * @param array $errorMessages
     * @param int $code
     *
     * @return JsonResponse
     */
    public function sendError(string $error, array $errorMessages = [], int $code = 404): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    /**
     * Send an error response.
     *
     * @param string $error
     * @param array $errorMessages
     * @param int $code
     *
     * @return JsonResponse
     */
    public function sendErrorWithCode(string $error, array $errorMessages = [], int $code = 404): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    /**
     * Send response with pagination.
     *
     * @param $items
     * @param $data
     *
     * @return JsonResponse
     */
    public function respondWithPagination($items, $data): JsonResponse
    {
        $data = array_merge($data, [
            'paginator' => [
                'total_count' => $items->total(),
                'total_pages' => ceil($items->total() / $items->perPage()),
                'current_page' => $items->currentPage(),
                'limit' => $items->perPage()
            ]
        ]);

        return $this->sendResponse($data);
    }
}
