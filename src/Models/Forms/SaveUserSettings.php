<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Enums\ListingType;
use JGrim\Lemmy\Sdk\Models\Enums\SortType;
use JGrim\Lemmy\Sdk\Models\Responses\LoginResponse;

final class SaveUserSettings implements Put
{
    public ?bool $show_nsfw = null;
    public ?bool $show_scores = null;
    public ?string $theme = null;
    public ?SortType $default_sort_type = null;
    public ?ListingType $default_listing_type = null;
    public ?string $interface_language = null;
    public ?string $avatar = null;
    public ?string $banner = null;
    public ?string $display_name = null;
    public ?string $email = null;
    public ?string $bio = null;
    public ?string $matrix_user_id = null;
    public ?bool $show_avatars = null;
    public ?bool $send_notifications_to_email = null;
    public ?bool $bot_account = null;
    public ?bool $show_bot_accounts = null;
    public ?bool $show_read_posts = null;
    public ?bool $show_new_post_notifs = null;
    public ?array $discussion_languages = null;
    public ?bool $generate_totp_2fa = null;
    public ?string $auth;
    public ?bool $open_links_in_new_tab = null;

    public function resourceUrl(): string
    {
        return '/user/save_user_settings';
    }

    public function responseModel(): string
    {
        return LoginResponse::class;
    }
}
