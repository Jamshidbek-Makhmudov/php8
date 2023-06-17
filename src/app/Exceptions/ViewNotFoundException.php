<?php

declare(strict_types = 1);

namespace src\app\Exceptions;

class ViewNotFoundException extends \Exception
{
    protected $message = 'View not found';
}
