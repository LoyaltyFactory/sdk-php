<?php

namespace Easir\SDK\Exception;

use Easir\SDK\Exception;

/**
 * Exceptions specific to Easir\SDK\Request
 * @package Easir\SDK\Exception
 */
class RequestException extends Exception
{
    const BAD_METHOD = 2010;
    const BAD_MODEL = 2011;
    const BAD_GRANT_TYPE = 2012;
    const MISSING_MODEL = 2013;
}
