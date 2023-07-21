<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\SiteResponse;

final class EditSite implements Put
{
    public string $auth;
    public ?string $name = null;
    public ?string $sidebar = null;
    public ?string $description = null;
    public ?string $icon = null;
    public ?string $banner = null;
    public ?bool $enableDownvotes = null;
    public ?bool $enableNsfw = null;
    public ?bool $communityCreationAdminOnly = null;
    public ?bool $requireEmailVerification = null;
    public ?string $applicationQuestion = null;
    public ?bool $privateInstance = null;
    public ?string $defaultTheme = null;
    public ?string $defaultPostListingType = null;
    public ?string $legalInformation = null;
    public ?bool $applicationEmailAdmins = null;
    public ?bool $hideModlogModNames = null;
    public ?array $discussionLanguages = null;
    public ?string $slurFilterRegex = null;
    public ?int $actorNameMaxLength = null;
    public ?int $rateLimitMessage = null;
    public ?int $rateLimitMessagePerSecond = null;
    public ?int $rateLimitPost = null;
    public ?int $rateLimitPostPerSecond = null;
    public ?int $rateLimitRegister = null;
    public ?int $rateLimitRegisterPerSecond = null;
    public ?int $rateLimitImage = null;
    public ?int $rateLimitImagePerSecond = null;
    public ?int $rateLimitComment = null;
    public ?int $rateLimitCommentPerSecond = null;
    public ?int $rateLimitSearch = null;
    public ?int $rateLimitSearchPerSecond = null;
    public ?bool $federationEnabled = null;
    public ?bool $federationDebug = null;
    public ?bool $captchaEnabled = null;
    public ?string $captchaDifficulty = null;
    public ?array $allowedInstances = null;
    public ?array $blockedInstances = null;
    public ?array $taglines = null;
    public ?string $registrationMode = null;

    public function resourceUrl(): string
    {
        return '/site';
    }

    public function responseModel(): string
    {
        return SiteResponse::class;
    }
}
