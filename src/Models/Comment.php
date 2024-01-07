<?php

namespace Prz\Apiwrapper\Models;

use Prz\Apiwrapper\Request;

class Comment
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getComments()
    {
        return $this->request->get('comments');
    }
}