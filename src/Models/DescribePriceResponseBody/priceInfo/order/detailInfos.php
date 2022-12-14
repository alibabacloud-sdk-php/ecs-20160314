<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order\detailInfos\resourcePriceModel;
use AlibabaCloud\Tea\Model;

class detailInfos extends Model
{
    /**
     * @var resourcePriceModel[]
     */
    public $resourcePriceModel;
    protected $_name = [
        'resourcePriceModel' => 'ResourcePriceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePriceModel) {
            $res['ResourcePriceModel'] = [];
            if (null !== $this->resourcePriceModel && \is_array($this->resourcePriceModel)) {
                $n = 0;
                foreach ($this->resourcePriceModel as $item) {
                    $res['ResourcePriceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcePriceModel'])) {
            if (!empty($map['ResourcePriceModel'])) {
                $model->resourcePriceModel = [];
                $n                         = 0;
                foreach ($map['ResourcePriceModel'] as $item) {
                    $model->resourcePriceModel[$n++] = null !== $item ? resourcePriceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
