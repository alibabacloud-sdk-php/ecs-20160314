<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceAutoRebootTimeResponseBody\autoRebootInfos;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAutoRebootTimeResponseBody extends Model
{
    /**
     * @var autoRebootInfos
     */
    public $autoRebootInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoRebootInfos' => 'AutoRebootInfos',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRebootInfos) {
            $res['AutoRebootInfos'] = null !== $this->autoRebootInfos ? $this->autoRebootInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAutoRebootTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRebootInfos'])) {
            $model->autoRebootInfos = autoRebootInfos::fromMap($map['AutoRebootInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
