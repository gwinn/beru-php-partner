<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class Refund extends Model
{
    public $id;
    public $orderId;
    public $creationDate;
    public $updateDate;
    public $logisticPickupPoint;
    public $shipmentRecipientType;
    public $shipmentStatus;
    public $refundAmount;
    public $amount;
    public $items;
    public $returnType;

    public $mappingClasses = [
        'logisticPickupPoint' => 'Yandex\Beru\Partner\Models\LogisticPickupPoint',
        'amount' => 'Yandex\Beru\Partner\Models\Amount',
        'items' => 'Yandex\Beru\Partner\Models\RefundItems',
    ];
}
