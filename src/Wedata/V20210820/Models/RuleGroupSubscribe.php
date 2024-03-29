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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据质量规则组订阅信息
 *
 * @method integer getRuleGroupId() 获取规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceivers() 获取订阅接收人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceivers(array $Receivers) 设置订阅接收人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubscribeType() 获取订阅方式 1.邮件email  2.短信sms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscribeType(array $SubscribeType) 设置订阅方式 1.邮件email  2.短信sms
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupSubscribe extends AbstractModel
{
    /**
     * @var integer 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var array 订阅接收人列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Receivers;

    /**
     * @var array 订阅方式 1.邮件email  2.短信sms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscribeType;

    /**
     * @param integer $RuleGroupId 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Receivers 订阅接收人列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubscribeType 订阅方式 1.邮件email  2.短信sms
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = [];
            foreach ($param["Receivers"] as $key => $value){
                $obj = new SubscribeReceiver();
                $obj->deserialize($value);
                array_push($this->Receivers, $obj);
            }
        }

        if (array_key_exists("SubscribeType",$param) and $param["SubscribeType"] !== null) {
            $this->SubscribeType = $param["SubscribeType"];
        }
    }
}
