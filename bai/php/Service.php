<?php
/**
 * <b>BaiPHP（简单PHP）开发框架</b>
 * @author		白晓阳
 * @copyright	Copyright (c) 2011 - 2012, 白晓阳
 * @link		http://dacbe.com
 * @version     V1.0.0 2012/03/31 首版
 *              V1.1.0 2012/04/30 添加Service类
 * <p>版权所有，保留一切权力。未经许可，不得用于商业用途。</p>
 */

/**
 * <h2>BaiPHP（简单PHP）开发框架</h2>
 * <h3>服务</h3>
 * <p>服务具有下述特点：</p>
 * <ol>
 * <li>服务是机灵的服务生，直接与客户打交道，接受客户的请求，提交流程进行处理，并向客户反馈结果。</li>
 * <li>服务由两部分组成：一部分负责组织界面，一部分负责组织数据。</li>
 * <li>服务可呈现出若干界面入口，但只有一个数据出口用于提交流程。</li>
 * <li>服务变化频繁，因为客户的需求一直在变。</li>
 * <ol>
 */
abstract class Service extends Bai
{
}
?>
