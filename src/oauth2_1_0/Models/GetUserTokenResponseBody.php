<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Voauth2_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetUserTokenResponseBody extends Model
{
    /**
     * @description accessToken
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description refreshToken
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @description 超时时间
     *
     * @var int
     */
    public $expireIn;
    protected $_name = [
        'accessToken'  => 'accessToken',
        'refreshToken' => 'refreshToken',
        'expireIn'     => 'expireIn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->refreshToken) {
            $res['refreshToken'] = $this->refreshToken;
        }
        if (null !== $this->expireIn) {
            $res['expireIn'] = $this->expireIn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['refreshToken'])) {
            $model->refreshToken = $map['refreshToken'];
        }
        if (isset($map['expireIn'])) {
            $model->expireIn = $map['expireIn'];
        }

        return $model;
    }
}
