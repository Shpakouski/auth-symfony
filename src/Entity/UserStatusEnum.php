<?php

namespace App\Entity;

enum UserStatusEnum: string
{
    case ACTIVE = 'Active';
    case BLOCKED = 'Blocked';
}
