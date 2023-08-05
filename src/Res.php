<?php

namespace Resphpi;

use Illuminate\Http\JsonResponse;

/**
 * Class Res
 *
 * The Res class provides convenient methods to create JSON responses with standardized formats for success,
 * failure, and error cases.
 */
class Res
{
    /**
     * Private constructor to prevent direct instantiation of the class.
     * This class only provides static methods for creating responses.
     */
    private function __construct() {}

    /**
     * Create a JSON response for a successful operation.
     *
     * @param mixed $data The data to be included in the response. Default: null.
     * @param int $statusCode The HTTP status code of the response. Default: 200.
     * @param array $headers Additional headers to be added to the response. Default: empty array.
     * @return JsonResponse The JSON response with 'success' status and optional data.
     */
    public static function success($data = null, int $statusCode = 200, array $headers = []): JsonResponse
    {
        return new JsonResponse([
            'status' => 'success',
            'data'   => $data,
        ], $statusCode, $headers);
    }

    /**
     * Create a JSON response for a failed operation.
     *
     * @param mixed $data The data to be included in the response. Default: null.
     * @param int $statusCode The HTTP status code of the response. Default: 400.
     * @param array $headers Additional headers to be added to the response. Default: empty array.
     * @return JsonResponse The JSON response with 'fail' status and optional data.
     */
    public static function fail($data = null, int $statusCode = 400, array $headers = []): JsonResponse
    {
        return new JsonResponse([
            'status' => 'fail',
            'data'   => $data,
        ], $statusCode, $headers);
    }

    /**
     * Create a JSON response for an error.
     *
     * @param mixed $data The error message to be included in the response. Default: null.
     * @param int $statusCode The HTTP status code of the response. Default: 500.
     * @param array $headers Additional headers to be added to the response. Default: empty array.
     * @return JsonResponse The JSON response with 'error' status and optional error message.
     */
    public static function error($data = null, int $statusCode = 500, array $headers = []): JsonResponse
    {
        return new JsonResponse([
            'status' => 'error',
            'data'   => $data,
        ], $statusCode, $headers);
    }
}
