<?php

namespace Prz\Apiwrapper;

class Response
{
    public function toJson($request)
    {
        $result = $request->getBody();
        return json_decode($result, true);
    }
}