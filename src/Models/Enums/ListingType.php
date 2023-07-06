<?php

namespace JGrim\Lemmy\Sdk\Models\Enums;

enum ListingType: string
{
    case All = 'All';
    case Local = 'Local';
    case Subscribed = 'Subscribed';
}
