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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例价格详细信息
 *
 * @method string getInstanceId() 获取实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstancePrice getInstancePrice() 获取询价信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstancePrice(InstancePrice $InstancePrice) 设置询价信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstancePriceDetail extends AbstractModel
{
    /**
     * @var string 实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var InstancePrice 询价信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstancePrice;

    /**
     * @param string $InstanceId 实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstancePrice $InstancePrice 询价信息。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new InstancePrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }
    }
}
