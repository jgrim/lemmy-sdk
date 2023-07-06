<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\PrivateMessage;
use JGrim\Lemmy\Sdk\Models\Data\PrivateMessageReport;

final class PrivateMessageReportView implements Model
{
    public PrivateMessageReport $private_message_report;
    public PrivateMessage $private_message;
    public Person $private_message_creator;
    public Person $creator;
    public ?Person $resolver = null;
}
