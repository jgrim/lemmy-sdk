<?php

declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;
use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Data\Language;
use JGrim\Lemmy\Sdk\Models\Data\MyUserInfo;
use JGrim\Lemmy\Sdk\Models\Data\Tagline;
use JGrim\Lemmy\Sdk\Models\Views\CustomEmojiView;
use JGrim\Lemmy\Sdk\Models\Views\PersonView;
use JGrim\Lemmy\Sdk\Models\Views\SiteView;

class GetSiteResponse implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(SiteView::class)]
    public SiteView $site_view;
    #[\Sunrise\Hydrator\Annotation\Relationship(PersonView::class)]
    public array $admins;
    public string $version;
    #[\Sunrise\Hydrator\Annotation\Relationship(MyUserInfo::class)]
    public ?MyUserInfo $myUser = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Language::class)]
    public array $all_languages;
    #[\Sunrise\Hydrator\Annotation\Relationship(Tagline::class)]
    public array $taglines;
    #[\Sunrise\Hydrator\Annotation\Relationship(CustomEmojiView::class)]
    public array $custom_emojis;
}
