<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

use JGrim\Lemmy\Sdk\Models\Enums\Trait\GetEnumTypes;

enum ModlogActionType: string
{
    use GetEnumTypes;

    case ALL = 'All';
    case MOD_REMOVE_POST = 'ModRemovePost';
    case MOD_LOCK_POST = 'ModLockPost';
    case MOD_FEATURE_POST = 'ModFeaturePost';
    case MOD_REMOVE_COMMENT = 'ModRemoveComment';
    case MOD_REMOVE_COMMUNITY = 'ModRemoveCommunity';
    case MOD_BAN_FROM_COMMUNITY = 'ModBanFromCommunity';
    case MOD_ADD_COMMUNITY = 'ModAddCommunity';
    case MOD_TRANSFER_COMMUNITY = 'ModTransferCommunity';
    case MOD_ADD = 'ModAdd';
    case MOD_BAN = 'ModBan';
    case MOD_HIDE_COMMUNITY = 'ModHideCommunity';
    case ADMIN_PURGE_PERSON = 'AdminPurgePerson';
    case ADMIN_PURGE_COMMUNITY = 'AdminPurgeCommunity';
    case ADMIN_PURGE_POST = 'AdminPurgePost';
    case ADMIN_PURGE_COMMENT = 'AdminPurgeComment';
}
