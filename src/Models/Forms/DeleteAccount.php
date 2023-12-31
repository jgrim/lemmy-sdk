<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\DeleteAccountResponse;

final class DeleteAccount implements Post
{
    public string $password;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/delete_account';
    }

    public function responseModel(): string
    {
        return DeleteAccountResponse::class;
    }
}
