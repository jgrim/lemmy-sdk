<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

enum RegistrationMode: string
{
    case Closed = 'Closed';
    case RequireApplication = 'RequireApplication';
    case Open = 'Open';
}
