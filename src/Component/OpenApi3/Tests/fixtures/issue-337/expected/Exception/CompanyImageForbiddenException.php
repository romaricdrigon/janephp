<?php

namespace CreditSafe\API\Exception;

class CompanyImageForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}