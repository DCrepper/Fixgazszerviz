<?php

namespace App\Enums;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

#[Description('List of available Shipping Methods')]
final class ShippingMethods extends Enum implements LocalizedEnum
{
    const FLATRATE = 'flat_rate';

    const FREESHIPPING = 'free_shipping';

    const LOCALPICKUP = 'local_pickup';
}
