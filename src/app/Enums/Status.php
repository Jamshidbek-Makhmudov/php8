<?php

namespace App\Enums;

class Status
{
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINE = 'decline';

    public const ALL_STATUSES=[
        self::PAID=>"Paid",
        self::PENDING=>"Pending",
        self::DECLINE=>"decline",

    ];

}