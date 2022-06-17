<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @param $result
     * @param $message
     * @return JsonResponse
     */
        public function sendResponse($result, $message): JsonResponse
        {
            $response = [
                'success' => true,
                'data'    => $result,
                'message' => $message,
            ];


            return response()->json($response, 200);
        }


    /**
     * return error response.
     *
     * @param $error
     * @param array $errorMessages
     * @param int $code
     * @return JsonResponse
     */
        public function sendError($error, $errorMessages = [], $code = 404): JsonResponse
        {
            $response = [
                'success' => false,
                'message' => $error,
            ];


            if(!empty($errorMessages)){
                $response['data'] = $errorMessages;
            }


            return response()->json($response, $code);
        }
    }
