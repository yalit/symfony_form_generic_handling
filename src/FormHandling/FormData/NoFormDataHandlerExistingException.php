<?php

declare(strict_types=1);

namespace App\FormHandling\FormData;

use Exception;
use Throwable;

final class NoFormDataHandlerExistingException extends Exception
{
    public function __construct(string $formTypeClass, int $code = 0, ?Throwable $previous = null) 
    {
        parent::__construct(sprintf("No FormDataHandler existing for %s", $formTypeClass), $code, $previous);
    }
}
