<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSSOAccount请求参数结构体
 *
 * @method string getInstanceId() 获取Grafana 实例 ID，例如：grafana-abcdefgh
 * @method void setInstanceId(string $InstanceId) 设置Grafana 实例 ID，例如：grafana-abcdefgh
 * @method string getUserId() 获取用户账号 ID ，例如：10000000
 * @method void setUserId(string $UserId) 设置用户账号 ID ，例如：10000000
 */
class DeleteSSOAccountRequest extends AbstractModel
{
    /**
     * @var string Grafana 实例 ID，例如：grafana-abcdefgh
     */
    public $InstanceId;

    /**
     * @var string 用户账号 ID ，例如：10000000
     */
    public $UserId;

    /**
     * @param string $InstanceId Grafana 实例 ID，例如：grafana-abcdefgh
     * @param string $UserId 用户账号 ID ，例如：10000000
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
