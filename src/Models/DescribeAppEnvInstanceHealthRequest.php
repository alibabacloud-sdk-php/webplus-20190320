<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppEnvInstanceHealthRequest extends Model
{
    /**
     * @var string
     */
    public $envId;
    protected $_name = [
        'envId' => 'EnvId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppEnvInstanceHealthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }

        return $model;
    }
}
