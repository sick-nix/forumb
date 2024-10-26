<?php

namespace App\Traits;

use App\Enums\RoleEnum;

trait HasRole
{
    /**
     * @return bool
     */
    public function isAdmin(): bool {
        return $this->role == RoleEnum::ADMIN->value;
    }

    /**
     * @return bool
     */
    public function isModerator(): bool {
        return $this->role == RoleEnum::MODERATOR->value;
    }

    /**
     * @return bool
     */
    public function isUser(): bool {
        return $this->role == RoleEnum::USER->value;
    }
}
