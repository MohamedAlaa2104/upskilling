<?php

if (!function_exists('apiResponse')) {
    function apiResponse($success = true, $statusCode = 200, $message = '', $data = [], $errors = [], $meta = []) : array
    {
        $response = [
            'success'    => $success,
            'statusCode' => $statusCode,
            'message'    => $message,
            'data'       => $data,
        ];

        if (!empty($errors)) {
            $response['errors'] = $errors;
        }

        if (!empty($meta)) {
            $response['meta'] = $meta;
        }

        return $response;
    }
}
