<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
/**
 * Class PaymentGateWay
 *
 * @property int $id
 * @property string $payment_gate_way_id
 * @property string $title
 * @property string $description
 * @property bool $enabled
 * @property string $method_title
 * @property string $method_description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */

class PaymentGateWay extends Model
{
    use HasFactory;

    protected $table = 'payment_gate_ways';

    protected $casts = [
        'enabled' => 'bool',
    ];

    protected $fillable = [
        'payment_gate_way_id', //bacs, cheque, cod, paypal, stripe
        'title',
        'description',
        'enabled',
        'method_title',
        'method_description',
    ];
}
