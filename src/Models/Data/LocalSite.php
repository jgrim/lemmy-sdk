<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

final class LocalSite
{
    public int $id;
    public int $site_id;
    public bool $site_setup;
    public bool $enable_downvotes;
    public bool $enable_nsfw;
    public bool $community_creation_admin_only;
    public bool $require_email_verification;
    public ?string $application_question = null;
    public bool $private_instance;
    public string $default_theme;
    public string $default_post_listing_type;
    public ?string $legal_information = null;
    public bool $hide_modlog_mod_names;
    public bool $application_email_admins;
    public ?string $slur_filter_regex = null;
    public int $actor_name_max_length;
    public bool $federation_enabled;
    public bool $captcha_enabled;
    public string $captcha_difficulty;
    public string $published;
    public ?string $updated = null;
    public string $registration_mode;
    public bool $reports_email_admins;
}
