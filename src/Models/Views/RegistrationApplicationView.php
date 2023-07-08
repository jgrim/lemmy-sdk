<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\LocalUser;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\RegistrationApplication;

final class RegistrationApplicationView implements Model
{
    public RegistrationApplication $registration_application;
    public LocalUser $creator_local_user;
    public Person $creator;
    public ?Person $admin = null;
}
