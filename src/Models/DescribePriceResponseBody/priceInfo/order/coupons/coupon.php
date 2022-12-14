<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order\coupons;

use AlibabaCloud\Tea\Model;

class coupon extends Model
{
    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $discountOff;

    /**
     * @var bool
     */
    public $isSelected;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'couponNo'    => 'CouponNo',
        'description' => 'Description',
        'discountOff' => 'DiscountOff',
        'isSelected'  => 'IsSelected',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->discountOff) {
            $res['DiscountOff'] = $this->discountOff;
        }
        if (null !== $this->isSelected) {
            $res['IsSelected'] = $this->isSelected;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coupon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiscountOff'])) {
            $model->discountOff = $map['DiscountOff'];
        }
        if (isset($map['IsSelected'])) {
            $model->isSelected = $map['IsSelected'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
