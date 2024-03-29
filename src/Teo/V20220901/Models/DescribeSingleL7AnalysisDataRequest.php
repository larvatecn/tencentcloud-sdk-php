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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSingleL7AnalysisData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method array getMetricNames() 获取查询的指标，取值有:
<li> l7Flow_singleIpRequest：独立IP请求数。</li>
 * @method void setMetricNames(array $MetricNames) 设置查询的指标，取值有:
<li> l7Flow_singleIpRequest：独立IP请求数。</li>
 * @method array getZoneIds() 获取查询的站点集合，不填默认查询所有站点。
 * @method void setZoneIds(array $ZoneIds) 设置查询的站点集合，不填默认查询所有站点。
 * @method array getFilters() 获取筛选条件, key可选的值有：
<li>country：国家/地区；</li>
<li>domain：域名；</li>
<li>protocol：协议类型；</li>
<li>tagKey：标签Key；</li>
<li>tagValue；标签Value。</li>
 * @method void setFilters(array $Filters) 设置筛选条件, key可选的值有：
<li>country：国家/地区；</li>
<li>domain：域名；</li>
<li>protocol：协议类型；</li>
<li>tagKey：标签Key；</li>
<li>tagValue；标签Value。</li>
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天;。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天;。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
 */
class DescribeSingleL7AnalysisDataRequest extends AbstractModel
{
    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var array 查询的指标，取值有:
<li> l7Flow_singleIpRequest：独立IP请求数。</li>
     */
    public $MetricNames;

    /**
     * @var array 查询的站点集合，不填默认查询所有站点。
     */
    public $ZoneIds;

    /**
     * @var array 筛选条件, key可选的值有：
<li>country：国家/地区；</li>
<li>domain：域名；</li>
<li>protocol：协议类型；</li>
<li>tagKey：标签Key；</li>
<li>tagValue；标签Value。</li>
     */
    public $Filters;

    /**
     * @var string 查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天;。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
     */
    public $Interval;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param array $MetricNames 查询的指标，取值有:
<li> l7Flow_singleIpRequest：独立IP请求数。</li>
     * @param array $ZoneIds 查询的站点集合，不填默认查询所有站点。
     * @param array $Filters 筛选条件, key可选的值有：
<li>country：国家/地区；</li>
<li>domain：域名；</li>
<li>protocol：协议类型；</li>
<li>tagKey：标签Key；</li>
<li>tagValue；标签Value。</li>
     * @param string $Interval 查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天;。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
     * @param string $Area 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
