<?php

declare(strict_types=1);

namespace App\FormHandling\FormData;

enum FormDataStatus : string {
    case NotSubmitted = "NotSubmitted";
    case Invalid = 'Invalid';
    case Valid = 'Valid';
}