<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class RestartAppEnvRequest extends Model
{
    /**
     * @var string
     */
    public $envId;

    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var int
     */
    public $batchPercent;

    /**
     * @var int
     */
    public $batchInterval;

    /**
     * @var bool
     */
    public $pauseBetweenBatches;
    protected $_name = [
        'envId'               => 'EnvId',
        'batchSize'           => 'BatchSize',
        'batchPercent'        => 'BatchPercent',
        'batchInterval'       => 'BatchInterval',
        'pauseBetweenBatches' => 'PauseBetweenBatches',
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
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->batchPercent) {
            $res['BatchPercent'] = $this->batchPercent;
        }
        if (null !== $this->batchInterval) {
            $res['BatchInterval'] = $this->batchInterval;
        }
        if (null !== $this->pauseBetweenBatches) {
            $res['PauseBetweenBatches'] = $this->pauseBetweenBatches;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartAppEnvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['BatchPercent'])) {
            $model->batchPercent = $map['BatchPercent'];
        }
        if (isset($map['BatchInterval'])) {
            $model->batchInterval = $map['BatchInterval'];
        }
        if (isset($map['PauseBetweenBatches'])) {
            $model->pauseBetweenBatches = $map['PauseBetweenBatches'];
        }

        return $model;
    }
}
