<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class GetTestByIdNotFoundException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\Error $error)
    {
        parent::__construct('not found', 404);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}