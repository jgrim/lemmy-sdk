<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\PrivateMessage;

final class PrivateMessageView implements Model
{
    public PrivateMessage $private_message;
    public Person $creator;
    public Person $recipient;
}
