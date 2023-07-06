<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CustomEmojiView;

final class CustomEmojiResponse implements Model
{
    public CustomEmojiView $custom_emoji;
}
