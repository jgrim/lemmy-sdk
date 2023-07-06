<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PersonMentionView;

final class PersonMentionResponse implements Model
{
    public PersonMentionView $person_mention_view;
}
