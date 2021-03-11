<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Voauth2_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetCorpAccessTokenRequest extends Model
{
    /**
     * @description 应用id
     *
     * @var string
     */
    public $suiteKey;

    /**
     * @description 应用密码
     *
     * @var string
     */
    public $suiteSecret;

    /**
     * @description OAuth 2.0 临时授权码
     *
     * @var string
     */
    public $authCorpId;

    /**
     * @description suiteTicket
     *
     * @var string
     */
    public $suiteTicket;
    protected $_name = [
        'suiteKey'    => 'suiteKey',
        'suiteSecret' => 'suiteSecret',
        'authCorpId'  => 'authCorpId',
        'suiteTicket' => 'suiteTicket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suiteKey) {
            $res['suiteKey'] = $this->suiteKey;
        }
        if (null !== $this->suiteSecret) {
            $res['suiteSecret'] = $this->suiteSecret;
        }
        if (null !== $this->authCorpId) {
            $res['authCorpId'] = $this->authCorpId;
        }
        if (null !== $this->suiteTicket) {
            $res['suiteTicket'] = $this->suiteTicket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCorpAccessTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['suiteKey'])) {
            $model->suiteKey = $map['suiteKey'];
        }
        if (isset($map['suiteSecret'])) {
            $model->suiteSecret = $map['suiteSecret'];
        }
        if (isset($map['authCorpId'])) {
            $model->authCorpId = $map['authCorpId'];
        }
        if (isset($map['suiteTicket'])) {
            $model->suiteTicket = $map['suiteTicket'];
        }

        return $model;
    }
}
