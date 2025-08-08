<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class RefundItem extends Model
{
    public $marketSku;
    public $shopSku;
    public $count;
    public $instances;
    public $tracks;

    public $mappingClasses = [
        'instances' => 'Yandex\Beru\Partner\Models\Instances',
        'tracks' => 'Yandex\Beru\Partner\Models\Tracks',
    ];
}

