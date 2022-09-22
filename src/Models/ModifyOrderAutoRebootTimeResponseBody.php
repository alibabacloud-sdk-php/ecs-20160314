<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyOrderAutoRebootTimeResponseBody\modifyOrderAutoRebootTimeInfo;
use AlibabaCloud\Tea\Model;

class ModifyOrderAutoRebootTimeResponseBody extends Model
{
    /**
     * @var modifyOrderAutoRebootTimeInfo
     */
    public $modifyOrderAutoRebootTimeInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modifyOrderAutoRebootTimeInfo' => 'ModifyOrderAutoRebootTimeInfo',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyOrderAutoRebootTimeInfo) {
            $res['ModifyOrderAutoRebootTimeInfo'] = null !== $this->modifyOrderAutoRebootTimeInfo ? $this->modifyOrderAutoRebootTimeInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOrderAutoRebootTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyOrderAutoRebootTimeInfo'])) {
            $model->modifyOrderAutoRebootTimeInfo = modifyOrderAutoRebootTimeInfo::fromMap($map['ModifyOrderAutoRebootTimeInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
