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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEnvironment请求参数结构体
 *
 * @method string getEnvironmentName() 获取环境名称
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名称
 * @method string getVpc() 获取私有网络名称
 * @method void setVpc(string $Vpc) 设置私有网络名称
 * @method array getSubnetIds() 获取子网列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网列表
 * @method string getDescription() 获取环境描述
 * @method void setDescription(string $Description) 设置环境描述
 * @method string getK8sVersion() 获取K8s version
 * @method void setK8sVersion(string $K8sVersion) 设置K8s version
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method boolean getEnableTswTraceService() 获取是否开启tsw服务
 * @method void setEnableTswTraceService(boolean $EnableTswTraceService) 设置是否开启tsw服务
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class CreateEnvironmentRequest extends AbstractModel
{
    /**
     * @var string 环境名称
     */
    public $EnvironmentName;

    /**
     * @var string 私有网络名称
     */
    public $Vpc;

    /**
     * @var array 子网列表
     */
    public $SubnetIds;

    /**
     * @var string 环境描述
     */
    public $Description;

    /**
     * @var string K8s version
     */
    public $K8sVersion;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var boolean 是否开启tsw服务
     */
    public $EnableTswTraceService;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $EnvironmentName 环境名称
     * @param string $Vpc 私有网络名称
     * @param array $SubnetIds 子网列表
     * @param string $Description 环境描述
     * @param string $K8sVersion K8s version
     * @param integer $SourceChannel 来源渠道
     * @param boolean $EnableTswTraceService 是否开启tsw服务
     * @param array $Tags 标签
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
        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("EnableTswTraceService",$param) and $param["EnableTswTraceService"] !== null) {
            $this->EnableTswTraceService = $param["EnableTswTraceService"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
