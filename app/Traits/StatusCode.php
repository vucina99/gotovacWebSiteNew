<?php

namespace App\Traits;

trait StatusCode
{
    public function success($code, $data)
    {
        return response()->json([
            "data" => $data
        ], $code);
    }

    public function error($code, $message)
    {
        return response()->json([
            "message" => $message
        ], $code);
    }
}
