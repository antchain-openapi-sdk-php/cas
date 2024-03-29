<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\CAS\Models;

use AlibabaCloud\Tea\Model;

class QueryCertificateRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    // workspace_id
    /**
     * @var string
     */
    public $workspaceId;

    // zone_id
    /**
     * @var string
     */
    public $zoneId;

    // provider_ids
    /**
     * @var string[]
     */
    public $providerIds;
    protected $_name = [
        'authToken'   => 'auth_token',
        'workspaceId' => 'workspace_id',
        'zoneId'      => 'zone_id',
        'providerIds' => 'provider_ids',
    ];

    public function validate()
    {
        Model::validateRequired('workspaceId', $this->workspaceId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->workspaceId) {
            $res['workspace_id'] = $this->workspaceId;
        }
        if (null !== $this->zoneId) {
            $res['zone_id'] = $this->zoneId;
        }
        if (null !== $this->providerIds) {
            $res['provider_ids'] = $this->providerIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['workspace_id'])) {
            $model->workspaceId = $map['workspace_id'];
        }
        if (isset($map['zone_id'])) {
            $model->zoneId = $map['zone_id'];
        }
        if (isset($map['provider_ids'])) {
            if (!empty($map['provider_ids'])) {
                $model->providerIds = $map['provider_ids'];
            }
        }

        return $model;
    }
}
