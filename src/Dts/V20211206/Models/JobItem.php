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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移任务列表
 *
 * @method string getJobId() 获取数据迁移任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置数据迁移任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobName() 获取数据迁移任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobName(string $JobName) 设置数据迁移任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建(提交)时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置任务创建(提交)时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取任务更新时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取任务开始执行时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置任务开始执行时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取任务执行结束时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置任务执行结束时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBriefMsg() 获取迁移任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefMsg(string $BriefMsg) 设置迁移任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态，取值为：creating(创建中)、created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态，取值为：creating(创建中)、created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunMode() 获取任务运行模式，值包括：immediate(立即运行)，timed(定时运行)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunMode(string $RunMode) 设置任务运行模式，值包括：immediate(立即运行)，timed(定时运行)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpectRunTime() 获取期待启动时间，当RunMode取值为timed时，此值必填，形如：2022-07-11 16:20:49
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpectRunTime(string $ExpectRunTime) 设置期待启动时间，当RunMode取值为timed时，此值必填，形如：2022-07-11 16:20:49
注意：此字段可能返回 null，表示取不到有效值。
 * @method MigrateAction getAction() 获取任务操作信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(MigrateAction $Action) 设置任务操作信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method MigrateDetailInfo getStepInfo() 获取迁移执行过程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepInfo(MigrateDetailInfo $StepInfo) 设置迁移执行过程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DBEndpointInfo getSrcInfo() 获取源实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcInfo(DBEndpointInfo $SrcInfo) 设置源实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DBEndpointInfo getDstInfo() 获取目标端信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstInfo(DBEndpointInfo $DstInfo) 设置目标端信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompareTaskInfo getCompareTask() 获取数据一致性校验结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareTask(CompareTaskInfo $CompareTask) 设置数据一致性校验结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method TradeInfo getTradeInfo() 获取计费状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeInfo(TradeInfo $TradeInfo) 设置计费状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobItem extends AbstractModel
{
    /**
     * @var string 数据迁移任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 数据迁移任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobName;

    /**
     * @var string 任务创建(提交)时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 任务更新时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 任务开始执行时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务执行结束时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 迁移任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefMsg;

    /**
     * @var string 任务状态，取值为：creating(创建中)、created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 任务运行模式，值包括：immediate(立即运行)，timed(定时运行)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunMode;

    /**
     * @var string 期待启动时间，当RunMode取值为timed时，此值必填，形如：2022-07-11 16:20:49
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpectRunTime;

    /**
     * @var MigrateAction 任务操作信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var MigrateDetailInfo 迁移执行过程信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepInfo;

    /**
     * @var DBEndpointInfo 源实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcInfo;

    /**
     * @var DBEndpointInfo 目标端信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstInfo;

    /**
     * @var CompareTaskInfo 数据一致性校验结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareTask;

    /**
     * @var TradeInfo 计费状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeInfo;

    /**
     * @var array 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $JobId 数据迁移任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobName 数据迁移任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建(提交)时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 任务更新时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 任务开始执行时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 任务执行结束时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BriefMsg 迁移任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态，取值为：creating(创建中)、created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunMode 任务运行模式，值包括：immediate(立即运行)，timed(定时运行)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpectRunTime 期待启动时间，当RunMode取值为timed时，此值必填，形如：2022-07-11 16:20:49
注意：此字段可能返回 null，表示取不到有效值。
     * @param MigrateAction $Action 任务操作信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param MigrateDetailInfo $StepInfo 迁移执行过程信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DBEndpointInfo $SrcInfo 源实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DBEndpointInfo $DstInfo 目标端信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompareTaskInfo $CompareTask 数据一致性校验结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param TradeInfo $TradeInfo 计费状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签信息
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BriefMsg",$param) and $param["BriefMsg"] !== null) {
            $this->BriefMsg = $param["BriefMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new MigrateAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = new MigrateDetailInfo();
            $this->StepInfo->deserialize($param["StepInfo"]);
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new DBEndpointInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DBEndpointInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("CompareTask",$param) and $param["CompareTask"] !== null) {
            $this->CompareTask = new CompareTaskInfo();
            $this->CompareTask->deserialize($param["CompareTask"]);
        }

        if (array_key_exists("TradeInfo",$param) and $param["TradeInfo"] !== null) {
            $this->TradeInfo = new TradeInfo();
            $this->TradeInfo->deserialize($param["TradeInfo"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
