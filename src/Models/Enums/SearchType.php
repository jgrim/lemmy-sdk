<?php

namespace JGrim\Lemmy\Sdk\Models\Enums;

enum SearchType: string
{
    case All = 'All';
    case Comments = 'Comments';
    case Posts = 'Posts';
    case Communities = 'Communities';
    case Users = 'Users';
    case Url = 'Url';
}
