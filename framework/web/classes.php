<?php

namespace liw;

class Request extends \Symfony\Component\HttpFoundation\Request{}
class Response extends \Symfony\Component\HttpFoundation\Response
{
    protected $request;

    public function __construct($content = '', $status = 200, array $headers, Request $request)
    {
        $this->request = $request;
        parent::__construct($content, $status, $headers);
    }
}
