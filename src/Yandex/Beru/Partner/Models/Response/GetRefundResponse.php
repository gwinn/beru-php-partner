<?php

namespace Yandex\Beru\Partner\Models\Response;

use Yandex\Common\Model;
use Yandex\Beru\Partner\Models\Refund;

class GetRefundResponse extends Model
{
    protected $refund;

    protected $mappingClasses = [
        'result' => 'Yandex\Beru\Partner\Models\Refund',
    ];

    /**
     * @return Refund
     */
    public function getRefund()
    {
        return $this->refund;
    }
}
