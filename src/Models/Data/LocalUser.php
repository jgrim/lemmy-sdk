<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Enums\ListingType;
use JGrim\Lemmy\Sdk\Models\Enums\SortType;

final class LocalUser implements Model
{
    public int $id;
    public int $person_id;
    public ?string $email = null;
    public bool $show_nsfw;
    public string $theme;
    public SortType $default_sort_type;
    public ListingType $default_listing_type;
    public string $interface_language;
    public bool $show_avatars;
    public bool $send_notifications_to_email;
    public string $validator_time;
    public bool $show_scores;
    public bool $show_bot_accounts;
    public bool $show_read_posts;
    public bool $show_new_post_notifs;
    public bool $email_verified;
    public bool $accepted_application;
    public ?string $totp_2fa_url = null;
    public bool $open_links_in_new_tab;
}
