<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderStatus extends Enum
{
    const waiting =   "Waiting";
    const shipping =   "Shipping";
    const shipped = "Shipped";
    const canceled = "Canceled";
    const approved = "Approved";
    const denied = "Denied";
}
