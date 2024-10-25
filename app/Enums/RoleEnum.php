<?php

namespace App\Enums;

use Kongulov\Traits\InteractWithEnum;

enum RoleEnum: string
{
    use InteractWithEnum;

    case ADMIN = 'admin';
    case MODERATOR = 'moderator';
    case USER = 'user';
}