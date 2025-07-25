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
 * UpdateExporterIntegration请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID
 * @method string getKind() 获取类型(可通过 DescribeExporterIntegrations 获取对应集成的 Kind)
 * @method void setKind(string $Kind) 设置类型(可通过 DescribeExporterIntegrations 获取对应集成的 Kind)
 * @method string getContent() 获取配置内容(可通过 DescribeExporterIntegrations 接口获取对应集成的 Content，并在此基础上做修改)
 * @method void setContent(string $Content) 设置配置内容(可通过 DescribeExporterIntegrations 接口获取对应集成的 Content，并在此基础上做修改)
 * @method integer getKubeType() 获取Kubernetes 集群类型，可不填。取值如下：
<li> 1= 容器集群(TKE) </li>
<li> 2=弹性集群(EKS) </li>
<li> 3= Prometheus管理的弹性集群(MEKS) </li>
 * @method void setKubeType(integer $KubeType) 设置Kubernetes 集群类型，可不填。取值如下：
<li> 1= 容器集群(TKE) </li>
<li> 2=弹性集群(EKS) </li>
<li> 3= Prometheus管理的弹性集群(MEKS) </li>
 * @method string getClusterId() 获取集群 ID，可不填
 * @method void setClusterId(string $ClusterId) 设置集群 ID，可不填
 */
class UpdateExporterIntegrationRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 类型(可通过 DescribeExporterIntegrations 获取对应集成的 Kind)
     */
    public $Kind;

    /**
     * @var string 配置内容(可通过 DescribeExporterIntegrations 接口获取对应集成的 Content，并在此基础上做修改)
     */
    public $Content;

    /**
     * @var integer Kubernetes 集群类型，可不填。取值如下：
<li> 1= 容器集群(TKE) </li>
<li> 2=弹性集群(EKS) </li>
<li> 3= Prometheus管理的弹性集群(MEKS) </li>
     */
    public $KubeType;

    /**
     * @var string 集群 ID，可不填
     */
    public $ClusterId;

    /**
     * @param string $InstanceId Prometheus 实例 ID
     * @param string $Kind 类型(可通过 DescribeExporterIntegrations 获取对应集成的 Kind)
     * @param string $Content 配置内容(可通过 DescribeExporterIntegrations 接口获取对应集成的 Content，并在此基础上做修改)
     * @param integer $KubeType Kubernetes 集群类型，可不填。取值如下：
<li> 1= 容器集群(TKE) </li>
<li> 2=弹性集群(EKS) </li>
<li> 3= Prometheus管理的弹性集群(MEKS) </li>
     * @param string $ClusterId 集群 ID，可不填
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

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("KubeType",$param) and $param["KubeType"] !== null) {
            $this->KubeType = $param["KubeType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
