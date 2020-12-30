<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\rdsInstances\rdsInstance;
use AlibabaCloud\Tea\Model;

class rdsInstances extends Model
{
    /**
     * @var rdsInstance[]
     */
    public $rdsInstance;
    protected $_name = [
        'rdsInstance' => 'RdsInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsInstance) {
            $res['RdsInstance'] = [];
            if (null !== $this->rdsInstance && \is_array($this->rdsInstance)) {
                $n = 0;
                foreach ($this->rdsInstance as $item) {
                    $res['RdsInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsInstance'])) {
            if (!empty($map['RdsInstance'])) {
                $model->rdsInstance = [];
                $n                  = 0;
                foreach ($map['RdsInstance'] as $item) {
                    $model->rdsInstance[$n++] = null !== $item ? rdsInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
