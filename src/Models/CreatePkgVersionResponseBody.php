<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreatePkgVersionResponseBody\pkgVersion;
use AlibabaCloud\Tea\Model;

class CreatePkgVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pkgVersion
     */
    public $pkgVersion;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'pkgVersion' => 'PkgVersion',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pkgVersion) {
            $res['PkgVersion'] = null !== $this->pkgVersion ? $this->pkgVersion->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePkgVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PkgVersion'])) {
            $model->pkgVersion = pkgVersion::fromMap($map['PkgVersion']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
