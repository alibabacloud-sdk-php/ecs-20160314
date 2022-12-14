<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeResponseBody\scenarios;
use AlibabaCloud\Tea\Model;

class DescribeEcsScenarioFacadeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scenarios[]
     */
    public $scenarios;
    protected $_name = [
        'requestId' => 'RequestId',
        'scenarios' => 'Scenarios',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scenarios) {
            $res['Scenarios'] = [];
            if (null !== $this->scenarios && \is_array($this->scenarios)) {
                $n = 0;
                foreach ($this->scenarios as $item) {
                    $res['Scenarios'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEcsScenarioFacadeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scenarios'])) {
            if (!empty($map['Scenarios'])) {
                $model->scenarios = [];
                $n                = 0;
                foreach ($map['Scenarios'] as $item) {
                    $model->scenarios[$n++] = null !== $item ? scenarios::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
