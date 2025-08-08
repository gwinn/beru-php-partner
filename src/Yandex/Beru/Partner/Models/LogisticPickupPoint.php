<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class LogisticPickupPoint extends Model
{
    public $id;
    public $name;
    public $address;
    public $instruction;
    public $type;
    public $logisticPartnerId;

    public $mappingClasses = [
        'address' => 'Yandex\Beru\Partner\Models\Address',
    ];
}
