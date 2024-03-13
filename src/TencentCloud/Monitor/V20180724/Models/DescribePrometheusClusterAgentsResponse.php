<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribePrometheusClusterAgents返回参数结构体
 *
 * @method array getAgents() 获取被关联集群信息
 * @method void setAgents(array $Agents) 设置被关联集群信息
 * @method integer getTotal() 获取被关联集群总量
 * @method void setTotal(integer $Total) 设置被关联集群总量
 * @method boolean getIsFirstBind() 获取是否为首次绑定，如果是首次绑定则需要安装预聚合规则
 * @method void setIsFirstBind(boolean $IsFirstBind) 设置是否为首次绑定，如果是首次绑定则需要安装预聚合规则
 * @method boolean getImageNeedUpdate() 获取实例组件是否需要更新镜像版本
 * @method void setImageNeedUpdate(boolean $ImageNeedUpdate) 设置实例组件是否需要更新镜像版本
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePrometheusClusterAgentsResponse extends AbstractModel
{
    /**
     * @var array 被关联集群信息
     */
    public $Agents;

    /**
     * @var integer 被关联集群总量
     */
    public $Total;

    /**
     * @var boolean 是否为首次绑定，如果是首次绑定则需要安装预聚合规则
     */
    public $IsFirstBind;

    /**
     * @var boolean 实例组件是否需要更新镜像版本
     */
    public $ImageNeedUpdate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Agents 被关联集群信息
     * @param integer $Total 被关联集群总量
     * @param boolean $IsFirstBind 是否为首次绑定，如果是首次绑定则需要安装预聚合规则
     * @param boolean $ImageNeedUpdate 实例组件是否需要更新镜像版本
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Agents",$param) and $param["Agents"] !== null) {
            $this->Agents = [];
            foreach ($param["Agents"] as $key => $value){
                $obj = new PrometheusAgentOverview();
                $obj->deserialize($value);
                array_push($this->Agents, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("IsFirstBind",$param) and $param["IsFirstBind"] !== null) {
            $this->IsFirstBind = $param["IsFirstBind"];
        }

        if (array_key_exists("ImageNeedUpdate",$param) and $param["ImageNeedUpdate"] !== null) {
            $this->ImageNeedUpdate = $param["ImageNeedUpdate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
