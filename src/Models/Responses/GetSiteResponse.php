<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Data\Language;
use JGrim\Lemmy\Sdk\Models\Data\MyUserInfo;
use JGrim\Lemmy\Sdk\Models\Data\Tagline;
use JGrim\Lemmy\Sdk\Models\Views\CustomEmojiView;
use JGrim\Lemmy\Sdk\Models\Views\PersonView;
use JGrim\Lemmy\Sdk\Models\Views\SiteView;
use Sunrise\Hydrator\Annotation\Relationship;

class GetSiteResponse implements Model
{
    #[Relationship(SiteView::class)]
    public SiteView $site_view;
    #[Relationship(PersonView::class)]
    public array $admins;
    public string $version;
    #[Relationship(MyUserInfo::class)]
    public ?MyUserInfo $myUser = null;
    #[Relationship(Language::class)]
    public array $all_languages;
    #[Relationship(Tagline::class)]
    public array $taglines;
    #[Relationship(CustomEmojiView::class)]
    public array $custom_emojis;
}
