<?php

namespace App\Enums;

enum OrderStatusEnum: string{
    case NEW = "NEW";
    case PROGRESS = "PROGRESS";
    case APPROVED = "APPROVED";
    case REJECTED = "REJECTED";
}