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
 * UpdateRecordingRule请求参数结构体
 *
 * @method string getName() 获取聚合规则名称
 * @method void setName(string $Name) 设置聚合规则名称
 * @method string getGroup() 获取聚合规则组内容，格式为 yaml，通过 base64 进行编码。
 * @method void setGroup(string $Group) 设置聚合规则组内容，格式为 yaml，通过 base64 进行编码。
 * @method string getInstanceId() 获取Prometheus 实例 ID(可通过 DescribePrometheusInstances 接口获取)
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID(可通过 DescribePrometheusInstances 接口获取)
 * @method string getRuleId() 获取Prometheus 聚合规则 ID(可通过 DescribeRecordingRules 接口获取)
 * @method void setRuleId(string $RuleId) 设置Prometheus 聚合规则 ID(可通过 DescribeRecordingRules 接口获取)
 * @method integer getRuleState() 获取规则状态码，取值如下：
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
默认状态码为 2 启用。
 * @method void setRuleState(integer $RuleState) 设置规则状态码，取值如下：
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
默认状态码为 2 启用。
 */
class UpdateRecordingRuleRequest extends AbstractModel
{
    /**
     * @var string 聚合规则名称
     */
    public $Name;

    /**
     * @var string 聚合规则组内容，格式为 yaml，通过 base64 进行编码。
     */
    public $Group;

    /**
     * @var string Prometheus 实例 ID(可通过 DescribePrometheusInstances 接口获取)
     */
    public $InstanceId;

    /**
     * @var string Prometheus 聚合规则 ID(可通过 DescribeRecordingRules 接口获取)
     */
    public $RuleId;

    /**
     * @var integer 规则状态码，取值如下：
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
默认状态码为 2 启用。
     */
    public $RuleState;

    /**
     * @param string $Name 聚合规则名称
     * @param string $Group 聚合规则组内容，格式为 yaml，通过 base64 进行编码。
     * @param string $InstanceId Prometheus 实例 ID(可通过 DescribePrometheusInstances 接口获取)
     * @param string $RuleId Prometheus 聚合规则 ID(可通过 DescribeRecordingRules 接口获取)
     * @param integer $RuleState 规则状态码，取值如下：
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
默认状态码为 2 启用。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }
    }
}
