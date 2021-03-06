<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vesign_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetCorpRealnameUrlRequest extends Model
{
    /**
     * @var string
     */
    public $dingCorpId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $dingIsvAccessToken;

    /**
     * @var string
     */
    public $dingSuiteKey;
    protected $_name = [
        'dingCorpId'         => 'dingCorpId',
        'userId'             => 'userId',
        'dingIsvAccessToken' => 'dingIsvAccessToken',
        'dingSuiteKey'       => 'dingSuiteKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingCorpId) {
            $res['dingCorpId'] = $this->dingCorpId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->dingIsvAccessToken) {
            $res['dingIsvAccessToken'] = $this->dingIsvAccessToken;
        }
        if (null !== $this->dingSuiteKey) {
            $res['dingSuiteKey'] = $this->dingSuiteKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCorpRealnameUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dingCorpId'])) {
            $model->dingCorpId = $map['dingCorpId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['dingIsvAccessToken'])) {
            $model->dingIsvAccessToken = $map['dingIsvAccessToken'];
        }
        if (isset($map['dingSuiteKey'])) {
            $model->dingSuiteKey = $map['dingSuiteKey'];
        }

        return $model;
    }
}
