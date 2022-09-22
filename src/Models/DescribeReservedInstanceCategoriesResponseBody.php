<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceCategoriesResponseBody\reservedInstanceCategories;
use AlibabaCloud\Tea\Model;

class DescribeReservedInstanceCategoriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reservedInstanceCategories
     */
    public $reservedInstanceCategories;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'                 => 'PageNumber',
        'pageSize'                   => 'PageSize',
        'requestId'                  => 'RequestId',
        'reservedInstanceCategories' => 'ReservedInstanceCategories',
        'totalCount'                 => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reservedInstanceCategories) {
            $res['ReservedInstanceCategories'] = null !== $this->reservedInstanceCategories ? $this->reservedInstanceCategories->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReservedInstanceCategoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReservedInstanceCategories'])) {
            $model->reservedInstanceCategories = reservedInstanceCategories::fromMap($map['ReservedInstanceCategories']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
